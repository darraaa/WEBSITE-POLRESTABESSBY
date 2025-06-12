<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index()
    {
        return view('chat'); // Tampilkan halaman chat pengguna
    }

    public function getMessages($userId)
    {
        $authId = Auth::id(); // User yang sedang login

        $messages = Message::where(function ($query) use ($authId, $userId) {
                $query->where('sender_id', $authId)->where('receiver_id', $userId);
            })->orWhere(function ($query) use ($authId, $userId) {
                $query->where('sender_id', $userId)->where('receiver_id', $authId);
            })
            ->orderBy('created_at', 'asc')
            ->get();

        return response()->json($messages);
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'sender_id' => 'required|integer',
            'receiver_id' => 'required|integer',
            'message' => 'required|string',
        ]);

        $message = new Message();
        $message->sender_id = $request->sender_id;
        $message->receiver_id = $request->receiver_id;
        $message->message = $request->message;
        $message->save();

        return response()->json(['message' => $message->message]);
    }
}
