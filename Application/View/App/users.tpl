<div class="row">
    <div class="col-lg-12">
        <p>
            <button type="button" class="btn btn-lg btn-default">Novo usuário</button>
            <button type="button" class="btn btn-lg btn-default">Grupos</button>
        </p>

        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        {$th}
                    </tr>
                </thead>
                <tbody>
                    
                    "positions" =>
                            array("owner" => 7,
                                "id" => NULL,
                                'password' => NULL,
                                'trash' => NULL,
                                'email' => 5,
                                'ordem' => 6,
                                'username' => 4,
                                '' => 1,
                                'modified' => 2,
                                'name' => 3
                    
                    {counter assign=i start=0 print=false} 
                    {foreach item=row from=$rows}
                        <tr class="success">
                            <td>{$row->created}</td>
                            <td>261</td>
                            <td>33.3%</td>
                            <td>$234.12</td>
                        </tr>
                        {counter}
                    {/foreach}   
                    {*<tr class="active">
                    <td>/index.html</td>
                    <td>1265</td>
                    <td>32.3%</td>
                    <td>$321.33</td>
                    </tr>
                    <tr class="success">
                    <td>/about.html</td>
                    <td>261</td>
                    <td>33.3%</td>
                    <td>$234.12</td>
                    </tr>
                    <tr class="warning">
                    <td>/sales.html</td>
                    <td>665</td>
                    <td>21.3%</td>
                    <td>$16.34</td>
                    </tr>
                    <tr class="danger">
                    <td>/blog.html</td>
                    <td>9516</td>
                    <td>89.3%</td>
                    <td>$1644.43</td>
                    </tr>
                    <tr>
                    <td>/404.html</td>
                    <td>23</td>
                    <td>34.3%</td>
                    <td>$23.52</td>
                    </tr>
                    <tr>
                    <td>/services.html</td>
                    <td>421</td>
                    <td>60.3%</td>
                    <td>$724.32</td>
                    </tr>
                    <tr>
                    <td>/blog/post.html</td>
                    <td>1233</td>
                    <td>93.2%</td>
                    <td>$126.34</td>
                    </tr>*}
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.row -->