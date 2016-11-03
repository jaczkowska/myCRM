<!DOCTYPE html>
<html lang="pl_PL">
    <?php include('layout/layouthead.php'); ?>
    <body>
        <?php include('layout/layoutmenu.php'); ?>

        <div class="main" style="width: 1008px;">
            <h2>Panel administracyjny</h2>
            <div class="row">
                <div class="col-md-3"><h5>Zarządzanie kartotekami</h5>
                    <a href="flatlist.php" type="button" class="btn btn-primary btn50"><span class="glyphicon glyphicon-envelope"></span><p class="btext">Inwestycje</p></a>
                    <a href="clientslist.php" type="button" class="btn btn-default btn50"><span class="glyphicon glyphicon-fire"></span><p class="btext">Klienci</p></a>
                    <a href="flatlist.php"type="button" class="btn btn-primary btn100"><span class="glyphicon glyphicon-home"></span><p class="btext">Lokale</p></a>
                </div>
                <div class="col-md-3"><h5>Planowanie</h5>
                    <a href="calendar.php" type="button" class="btn btn-primary btn100"><span class="glyphicon glyphicon-time"></span><p class="btext">Kalendarz</p></a>
                    <a href="service.php" type="button" class="btn btn-danger btn100"><span class="glyphicon glyphicon-wrench"></span><p class="btext">Serwis</p></a>
                </div>
                <div class="col-md-3"><h5>Raporty i analizy</h5>
                    <a href="contract.php" type="button" class="btn btn-default btn50"><span class="glyphicon glyphicon-file"></span><p class="btext">Umowy</p></a>	
                    <a href="import.php" type="button" class="btn btn-info btn50"><span class="glyphicon glyphicon-import"></span><p class="btext">Import</p></a>	
                    <a href="reports.php" type="button" class="btn btn-warning btn100"><span class="glyphicon glyphicon-print"></span><p class="btext">Raporty i analizy</p></a>			
                </div>
                <div class="col-md-3"><h5>Administrowanie systemem</h5>
                    <a href="users-adm.php" type="button" class="btn btn-default btn50"><span class="glyphicon glyphicon-cog"></span><p class="btext">Zarządzanie użytkownikami</p></a>
                </div>
            </div>
        </div>
    </body>
</html>
