@extends('layouts.app')
<link rel="stylesheet" href="../css/Form.css">
@section('content')

<div class="ImgBack">
    <img>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="UserStatus">
            <h1 class="FormHead Activate ">Login</h1>
            <h1 class="FormHead  ">Sign Up</h1>
        </div>
        <div class="Form">
            <form method="POST" >
                <div class="form-group row">
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="User Name" name="UserName">
                </div>
                </div>
                    <div class="form-group row">
                    <div class="col-sm-10">
                     <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="Pass">
                </div>
            </form>
        </div>
</div>
    </div>
</div>
@endsection
