<h1>This project simulates twitter functionality</h1>
<p>In order to create admin account <br>
please follow the following commands :-
<hr>
<ul>
    <ol>php artisan tinker</ol>
    <ol>use App\models\User;</ol>
    <ol>$user = User::create(['name'=>'admin','email'=>'email@example.com','is_admin'=>'1','password'=>Hash::make('12345678')]);</ol>
   
</ul>
<hr>
Then you can login with these credentials :- <br>
E-Mail  : email@example.com
Password: 12345678
</p>
