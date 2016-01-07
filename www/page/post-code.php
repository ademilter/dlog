<article class="Post">


    <header class="PostHeader">
        <section class="width">
            <time>November 23, 2015</time>
        </section>
    </header>
    <!-- /.PostHeader -->


    <div class="PostBody">

        <section class="width">
            <h1>Static Site Generation with React and Webpack</h1>

            <p>
                I’ve been dabbling with React for a few months now and using it in several small open source projects to
                better understand the technology. React’s focus on reusablility, along with the ability to install and
                require components via npm, provides an elegant way to rapidly build application UI in an efficient and
                consistent way. It’s also a great way to handle server-side rendering and provides high cohesion between
                markup and display logic.
            </p>

            <h2>Set up Webpack</h2>

            <p>
                Webpack is a module bundler similar to Browserify, but can also replace front-end build systems like
                Grunt and Gulp.
            </p>

            <p>
                First off, you’ll need a webpack.config.js file. The webpack command line interface will use this config
                file.
            </p>

            <?php include_once "post-figure-code2.php"; ?>

            <p>
                To do so let' s open up
                <code>src/kemal_chat.cr</code>.
            </p>

            <p>
                Create a new css directory and a base.css file. Import Basscss and set a new value for the — font-family
                custom property.
            </p>


            <?php include_once "post-figure-code1.php"; ?>


            <p>
                If you’re hosting the static site on gh-pages, you’ll need a way to handle the base url when using React
                Router’s Link component. I don’t know of a good way to do this yet and would love to hear suggestions on
                how to improve that.
            </p>

            <figure class="code">
                <script src="https://gist.github.com/arunoda/8558920a9972fa41afa1.js"></script>
                <figcaption>embed github gist</figcaption>
            </figure>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam deserunt dignissimos doloremque,
                ea, exercitationem, facere harum itaque laborum modi nisi possimus quas quibusdam ratione recusandae
                similique temporibus unde ut voluptatibus?
            </p>
        </section>


    </div>
    <!-- /.PostBody -->


    <footer class="PostFooter">
        <section class="width">
            <?php include_once "post-action.php"; ?>
        </section>
    </footer>
    <!-- /.PostFooter -->


    <div class="PostComment">
        <div class="width">
            <?php include_once "post-disqus.php"; ?>
        </div>
    </div>
    <!-- /.PostComment -->


</article>