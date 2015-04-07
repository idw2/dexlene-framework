{*<body>

{$content}

</body>*}
<div id="wrapper">

    {include file="navbar.tpl"}

    <div id="page-wrapper">

        <div class="container-fluid">

            {include file="breadcrumbs.tpl"}
            
            {$content}

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
