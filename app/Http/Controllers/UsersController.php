<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Laracasts\Flash\Flash; /* este lo coloco para poder usar los mensajes flash */
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /* aqui voy a guardar en la variable users toda la lista de usuarios ordenada por el id y de forma asendente  */
       /* con paginate 5 le digo que me pagine de a 5 usuarios a la vez */
       
    
        $users = User::orderBy('id', 'ASC')->paginate(5);

        /* ahora vamos a retornar esos datos a una vista para poder mostrarlos  */
        /* lo camos a mostrar en index y pasamos con with la variable que vamos a trabajar alla */
        

        return view('admin.users.index')->with('users',$users);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /* esta el la ruta que nos lleva al el formulario para crear los nuevos usuarios de nuestra aplicacion */
        
        return view('admin.users.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    public function store(UserRequest $request)

    {   
       /* se crea un usuario nuevo y se le coloca el request que viene del formulario con all para que salgan solo los datos que necesitamos y no todo el objeto. */
    
        $user = new User();

        /* ahora encripto el pasword */
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password= bcrypt($request->password);
        $user->type= $request->type;
        /* y por ultimo lo guardamos */
        
       

        $user->save();

       
        /* aqui creo un mensaje y lo concateno con el nombre */
        /* hay que colocar esto en donde se va a mosntrar el mensaje en la pllantilla   @include('flash::message')  */
        
        flash('Se ha registrado '. $user->name. ' de forma exitosa!')->success();


        
        /* asi redirecciono a una pagina que quiera */
        return redirect()->route('users.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /* tomamos el id que viene de el formulario y lo buscamos en la base de datos y lo cargamos en $user */
        
        $user = User::find($id);
        return view('admin.users.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    


    public function update(Request $request, $id)
    {
        $user= User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->type = $request->type;
        $user->save();

        Flash::warning('El usuario ' .$user->name. 'ha sido editado con exito' );
        return redirect()->route('users.index');

        /* aqui tambien funciona usar $user->fill($request->all()); pero yo no lo use porque en la creacion lo usaba y tenia problemas para guardar los campos de type asi que mejor lo deje asi */
        

    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        flash::error('El usuario ' .$user->name.' fue borrado');
        return redirect()->route('users.index');


    
    }   







}
