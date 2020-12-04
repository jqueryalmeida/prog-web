<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link href="assets/css/jquery.bootgrid.css" rel="stylesheet" />


<script
	src="https://code.jquery.com/jquery-1.12.4.min.js"
	integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
	crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap.min.js"></script>
<script src="assets/js/jquery.bootgrid.min.js"></script>

<body>
<table id="cliente_grid" class="table table-condensed table-hover table-striped" width="100%" cellspacing="0" data-toggle="bootgrid">
            <thead>
                <tr>
                    <th data-column-id="id" data-type="numeric">ID</th>
                    <th data-column-id="nome">Nome</th>
                    <th data-column-id="email">E-mail</th>
                    <th data-column-id="nascimento">Nascimento</th>
                    <th data-column-id="cpf">CPF</th>
                </tr>
            </thead>
        </table>

<script>
$("#cliente_grid").bootgrid({
        ajax: true,
        post: function ()
        {
            /* To accumulate custom parameter with the request object */
            return {
                id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
            };
        },
        url: "response.php",
        formatters: {
            
        }
   });
</script>
