<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\User;
use Laravel\Passport\ClientRepository;
use Illuminate\Support\Facades\Auth;
use App\Mail\WelcomeMail;


class UserController extends Controller
{

    /**
     * Affiche le formulaire d'inscription.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('admin.register');
    }


    /**
 * Enregistre un nouvel utilisateur.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\RedirectResponse
 */
public function register(Request $request)
{
    // Valider les données du formulaire
    $request->validate([
        'firstname' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
    ]);

    // Générer un mot de passe aléatoire
    $password = bin2hex(random_bytes(8)); // Génère un mot de passe de 8 caractères

    // Créer un nouvel utilisateur
    $user = User::create([
        'firstname' => $request->firstname,
        'lastname' => $request->lastname,
        'email' => $request->email,
        'password' => Hash::make($password), // Hasher le mot de passe
        'email_verified_at' => now(),
    ]);

    // Vérifier si l'utilisateur a bien été créé
    if (!$user) {
        return response()->json([
            'status' => 500,
            'message' => "Erreur lors de la création de l'utilisateur",
        ], 500);
    }

    // Envoi de l'e-mail de bienvenue avec le mot de passe
    Mail::to($user->email)->send(new WelcomeMail($user, $password));

    // Création d'un token Passport pour l'utilisateur
    $token = $user->createToken('BloChallenge')->accessToken;

    // Rediriger l'utilisateur vers la page de connexion
    return redirect()->back()->with('success', 'Votre compte a été créé avec succès. Vous pouvez vous connecter');
}


     /**
     * Affiche le formulaire de connexion.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('admin.login');
    }

    /**
     * Connecte un utilisateur.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Tentative de connexion de l'utilisateur
        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // Récupération de l'utilisateur authentifié
            $user = Auth::guard('web')->user();

            // Création d'un token Passport pour l'utilisateur
            $token = $user->createToken('BloChallenge')->accessToken;

            // Redirection vers la page d'accueil après la connexion réussie
            return redirect()->route('listUser')->with([
                'success' => 'Connexion réussie!',
                'token' => $token,
            ]);
        } else {
            // Retourner une erreur non autorisée si la connexion échoue
            return redirect()->back()->withErrors([
                'message' => "Les informations d'identification ne sont pas valides.",
            ]);
        }
    }
}
