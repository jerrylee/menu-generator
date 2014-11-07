<?php include('header.php'); ?>
    
    <h1>Custom Wordpress / Bootstrap Menu Generator</h1>

    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <h2>Use this form to add pages to a specific menu in your Wordpress. When it is done, you will have a nice menu generated.</h2>
                    <form action="menu.php" method="POST">
                        <p>
                            <label for="menu-name">Menu Name</label>
                            <input type="text" name="menu-name-1" class="menu-name" />
                        </p>
                        <p>
                            <label for="menu-name">Parent Page ID</label>
                            <input type="text" name="parent-page-id" class="parent-page-id" />
                        </p>
                        <p>
                            <input type="submit" value="SUBMIT">
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>


<?php include('footer.php'); ?>