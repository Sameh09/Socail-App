<h1>This project simulates twitter functionality</h1>
<p>In order to create admin account <br>
please follow the following commands :-
<hr>
<ol>
    <li>php artisan tinker</li>
    <li>use App\models\User;</li>
    <li>$user = User::create(['name'=>'admin','email'=>'email@example.com','is_admin'=>'1','password'=>Hash::make('12345678')]);</li>
   
</ol>
<hr>
<h3>Then you can login with these credentials :- </h3><br>
E-Mail  : email@example.com <br>
Password: 12345678
</p>
