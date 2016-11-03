<!-- Nawigacja górna -->
<nav class="navbar navbar-custom hidden-xs" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Rozwiń nawigację</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

	<div class="collapse navbar-collapse navbar-right" >
      <ul class="nav navbar-nav navbar-right">
	    <li role="presentation"><a href="#">Messages <span class="badge">32</span></a></li>
		<li><a href="#">Inbox <span class="badge">42</span></a></li>
      </ul>
    </div>
 </div>
</nav>

<!-- Nawigacja lewa -->
<nav class="navbar navbar-inverse sidebar" role="navigation">
    <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">CRMdev</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li ><a href="buildinglist.php">Inwestycje </span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
				<li ><a href="flatList.php">Lokale </span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
				<li class="dropdown">
					<a href="clientslist.php" class="dropdown-toggle" data-toggle="dropdown">Klienci <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
					<ul class="dropdown-menu forAnimate" role="menu">
						<li><a href="clientslist.php">Kontrahenci</a></li>
						<li><a href="clientslist.php">Potencjalni klienci</a></li>
					</ul>
				</li>
				<li ><a href="contractList.php">Umowy<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-paperclip"></span></a></li>
				<li ><a href="">Poczta<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>
				<li><a href="calendar.php">Kalendarz<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-pushpin"></span></a></li>
				<li class="dropdown">
					<a href="reports.php" class="dropdown-toggle" data-toggle="dropdown">Raporty i analizy <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-print"></span></a>
					<ul class="dropdown-menu forAnimate" role="menu">
						<li><a href="reports.php">Raport</a></li>
						<li><a href="imports.php">Import</a></li>
					</ul>
				</li>
				<li><a href="servicelist.php">Serwis<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-wrench"></span></a></li>
				<li><a href="settings.php">Ustawienia<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a></li>
			</ul>
		</div>
	</div>
</nav>