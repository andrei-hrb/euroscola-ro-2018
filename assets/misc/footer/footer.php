<!-- Footer -->
<hr>
<footer class="footer mt-5 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-5 mx-3 mt-3">
                <div>
                <img class="logo" src="/assets/img/ui stuff/logo.png">
                </div>
                <div class="mt-3">
                    <p class="text-white foot"><?= $footerText ?> </p>
                    <a href="http://www.dcantemir.ro" class="foot"><?=$footerSite?></a>
                </div>
            </div>
            <div class="col-5 mx-3 mt-3 ml-auto">
                <?php include('facebook.php'); ?>
            </div>
        </div>

        <p class="text-center text-light mt-5 foot" style="font-size: small;">Build with ❤️ by <a href="https://github.com/andrei-hrb" class="foot"><strong>Hîrbu Andrei</strong></a> and <a href="https://github.com/DianaElenaStancu" style="text-decoration: none;" class="foot"><strong>Diana-Elena Stancu</strong></a></p>
        <p class="text-center text-light m-3 foot" style="font-size: small;">#EuroscolaRO2018</p>
    </div>
</footer>