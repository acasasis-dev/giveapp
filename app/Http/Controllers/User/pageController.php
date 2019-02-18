<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class pageController extends Controller
{
    //for login and sign up page
	public function user() {
		return view ('user.landing');
	}

    public function loginPost( Request $req ) {
        $email = addslashes( $req->email );
        $password = addslashes( $req->password );

        $query = "
            select * from users where user_email=\"$email\"
        ";

        $res = DB::select( $query );
        $redr = "/Giveapp.com";
        if( $res[0] ) {
            if( $res[0]->user_pass == md5( $password ) )
                $redr = "/user/home";
        }

        return redirect( $redr );
    }

    public function signupPost( Request $req ) {
        $name = addslashes( $req->name );
        $email = addslashes( $req->email );
        $password = addslashes( $req->password );
        $address = addslashes( $req->address );
        $contact_number = addslashes( $req->contact_number );

        $query = "
            insert into
                users(
                    user_name,
                    user_email,
                    user_pass,
                    user_add,
                    user_contact
                ) values(
                    \"$name\",
                    \"$email\",
                    md5( \"$password\" ),
                    \"$address\",
                    \"$contact_number\"
                )
        ";

        DB::insert( $query );
        header( "Location: /Giveapp.com" );
    }
    //homepage
    public function show() {
    	return view ('user.home');
    }
    //profile page
    public function profile() {
    	return view ('user.profile');
    }
    //about page
    public function about() {
    	return view ('user.about');
    }
    //categories -  electronic devices
    public function electrodevices() {
        return view ('user.category.electronicdevices');
    }
    //categories - electronic accessories
    public function electroaccesory() {
        return view ('user.category.electronicaccessories');
    }
    //categories - tv and home appliances
    public function appliances() {
        return view ('user.category.appliances');
    }
    //categories - health and beauty
    public function health() {
        return view ('user.category.health');
    }
    //categories - babies and toys
    public function babies() {
        return view ('user.category.babies');
    }
    //categories - groceries and pets
    public function groceries() {
        return view ('user.category.groceries');
    }
    //categories - home and lifestyle
    public function lifestyle() {
        return view ('user.category.lifestyle');
    }
    //categories - women's fashion
    public function womens() {
        return view ('user.category.womens');
    }
    //categories - men's fashion
    public function mens() {
        return view ('user.category.mens');
    }
    //categories - fashion accessories
    public function accessories() {
        return view ('user.category.accessories');
    }
    //categories - sports and travel
    public function sports() {
        return view ('user.category.sports');
    }
    //categories - automotive & motorcycles
    public function automotive() {
        return view ('user.category.automotive');
    }


    //Dontate Item
    public function donate() {
        return view ('user.profile.donateitem');
    }

    // public function store(Request $request) {
    //     $
    // }
}
