@extends('base')    

@section('title','Sign In')

@section('content')    
    <section class="hero is-light is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="columns">
                    <div class="column is-4 is-offset-4">
                        <h3 class="title has-text-grey">Login</h3>
                        <p class="subtitle has-text-grey">Please login to proceed.</p>
    
                        <div class="box">
                            <form action="">
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
                                <button class="button is-block is-info is-large is-fullwidth" type="submit">Login</button>
                            </form>
                        </div>
                        <p class="has-text-grey">
                            <a href="../">Sign Up</a> &nbsp;·&nbsp;
                            <a href="../">Forgot Password</a> &nbsp;·&nbsp;
                            <a href="../">Need Help?</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>  
    </section>
@endsection