<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function show()
    { 
        
        return view('contact'); 
    }

    public function submitForm(Request $request)
    {
        // Validação dos dados do formulário
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'telephone' => 'required|max:20', 
            'reason' => 'required',
            'message' => 'required',
        ]);

        // Salva os dados do contato no banco de dados
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->telephone = $request->telephone;
        $contact->reason = $request->reason;
        $contact->message = $request->message;
        $contact->save();

        // Redireciona de volta com uma mensagem de sucesso
        return redirect()->back()->with('success', 'Mensagem enviada com sucesso!');
    }
}
