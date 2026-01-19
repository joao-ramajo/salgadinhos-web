<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UpdateUserProfileController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:50'],
        ]);

        $user = Auth::user();
        $name = $request->input('name');

        // Atualiza o nome do usuário
        $user->update([
            'name' => $name,
        ]);

        // Atualiza o nickname apenas nos comentários desse usuário
        Comment::where('user_id', $user->id)
            ->update([
                'nickname' => $name,
            ]);

        return redirect()
            ->route('profile', ['user' => $user->id])
            ->with('success', 'Perfil atualizado com sucesso.');
    }
}
