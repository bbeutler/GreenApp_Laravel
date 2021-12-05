<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        return view('pages.index');
    }

    public function showProfile(){

        return view('pages.profile');
    }

    public function showCards(){

        return view('pages.cards');

    }

    public function showRecipientBank(){

        return view('pages.recipient-bank');

    }

    public function sendMoney(){

        return view('pages.send-money');

    }

    public function showTransactions(){

        return view('pages.transactions');

    }

    public function withdrawMoney(){

        return view('pages.withdraw-money');

    }

    public function depositMoney(){

        return view('pages.deposit-money');
    }

    public function showDashboard(){

        return view('pages.dashboard');
    }

    public function showLogin(){

        return view('auth.login');
    }

    public function showRegister(){

        return view('auth.register');
    }
}   
