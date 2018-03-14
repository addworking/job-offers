@extends('addworking.job_offer')

@section('title')
    <h1>Integrator / UX Designer</h1>
@endsection

@section('content')
    <section id="job-description">
        <h2>Description</h2>
        <p>
            We're an awesome <b>disruptive HR-tech startup</b>
            incubated at <b>Le Cargo, in the 19th arrondissement, Paris.</b>
            We're looking for an integrator to help us better the design
            of our <b>Laravel application</b>. As you can see from this
            template, we're currently using the famous <i>Bootstrap and
            YOLO</i> design pattern. We need someone talented to help-us
            level our UX game.
        </p>
    </section>

    <form action="{{ route('job.apply') }}" method="post" class="form">
        <h2>Apply</h2>

        <div class="row">
            <div class="col-4">
                <h3>Technical Skills</h3>

                <label>
                    <input type="checkbox" name="skills[]" value="html5_css3" required> HTML5 / CSS3
                </label>
                <label>
                    <input type="checkbox" name="skills[]" value="sass" required> SaSS
                </label>
                <label>
                    <input type="checkbox" name="skills[]" value="bootstrap" required> Bootstrap
                </label>
                <label>
                    <input type="checkbox" name="skills[]" value="jquery" required> jQuery
                </label>
                <label>
                    <input type="checkbox" name="skills[]" value="laravel_blade"> Laravel Blade
                </label>
                <label>
                    <input type="checkbox" name="skills[]" value="vuejs"> Vue.js
                </label>
                <label>
                    <input type="checkbox" name="skills[]" value="php"> PHP
                </label>
                <label>
                    <input type="checkbox" name="skills[]" value="git"> Git
                </label>
            </div>

            <div class="col-4">
                <h3>Responsibilities</h3>

                <ul>
                    <li>Create mockups with the Product Owner</li>
                    <li>Give advices on feature usability</li>
                    <li>Assemble feature templates</li>
                    <li>Create generic components</li>
                    <li>Write automatic tests</li>
                    <li>Translate the app</li>
                </ul>
            </div>

            <div class="col-4">
                <h3>Other Skills</h3>

                <label>
                    <input type="checkbox" name="skills[]" value="french" required> French
                </label>
                <label>
                    <input type="checkbox" name="skills[]" value="english" required> English
                </label>
                <label>
                    <input type="checkbox" name="skills[]" value="component_based_design"> Component Base UI Design
                </label>
                <label>
                    <input type="checkbox" name="skills[]" value="atomic_design"> Atomic Design
                </label>
            </div>
        </div>

        <button type="submit">
            <i class="fa fa-thumbs-up"></i> I'm in!
        </button>
    </form>
@endsection

@section('footer')
    <footer>
        Contact me: <a href="mailto:benjamin@addworking.com">benjamin@addworking.com</a>
    </footer>
@endsection

