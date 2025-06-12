<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminChatController extends Controller
{
    public function index()
    {
        // Tampilkan halaman chat admin
        return view('admin.adminchat');
    }

    public function getMessages($userId)
    {
        $authId = Auth::id(); // Admin yang sedang login

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
    public function showChat()
    {
        // Pastikan Auth::user() hanya mengembalikan data jika user sudah login
        $user = Auth::user(); // Atau null jika tidak ada user yang login
        
        return view('chat', compact('user')); // Kirim variabel user ke view
    }
    
    
}
