@extends('base')    

@section('title','Sign Up')

@section('content')    
    <section class="hero is-light is-fullheight">
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column is-6 is-offset-3">
                        <h3 class="title has-text-grey has-text-centered">Sign Up</h3>
                        <p class="subtitle has-text-grey has-text-centered">Create a New Account</p>
    
                        <div class="box">
                            <form action="">
                                <div class="field">
                                    <label class="label">Nama Lengkap</label>
                                    <div class="control">
                                    <input class="input" type="text">
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">No KTP</label>
                                    <div class="control">
                                    <input class="input" type="text">
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Username</label>
                                    <div class="control">
                                    <input class="input" type="text">
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Password</label>
                                    <div class="control">
                                    <input class="input" type="password">
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">No HP</label>
                                    <div class="control">
                                    <input class="input" type="text">
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Alamat</label>
                                    <div class="control">
                                    <textarea class="textarea" name="" id=""></textarea>
                                    </div>
                                </div>
                                <div class="control">
                                    <button class="button is-info is-medium" type="submit">Register</button>
                                </div>
                            </form>
                        </div>
                        <p class="has-text-grey has-text-centered">
                            <a href="../">Sign In</a> &nbsp;·&nbsp;
                            <a href="../">Forgot Password</a> &nbsp;·&nbsp;
                            <a href="../">Need Help?</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>  
    </section>
@endsection