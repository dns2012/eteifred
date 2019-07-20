<?php include_once dirname(__FILE__).'/../layouts/header.php';?>
<!-- MAIN PANEL -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header d-flex justify-content-between border-bottom-0">
                        <h5 class="mb-0">
                            MESSAGE LIST
                        </h5>
                    </div>
                </div>
                <div class="card">
                    <table class="table table-order table-hover">
                        <thead class="thead-primary">
                            <tr>
                                <th class="text-left">#</th>
                                <th class="text-left">Name</th>
                                <th class="text-left">Email</th>
                                <th class="text-left">Phone</th>
                                <th class="text-left">Location</th>
                                <th class="text-left">Message</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($message as $index => $message): ?>
                            <tr>
                                <td class="text-left"><?=$index+1?></td>
                                <td class="text-left"><?=$message->name?></td>
                                <td class="text-left"><?=$message->email?></td>
                                <td class="text-left"><?=$message->phone?></td>
                                <td class="text-left"><?=$message->location?></td>
                                <td class="text-left"><?=$message->message?></td>
                            </tr>
                        <?php endforeach ?>
                        </tbody>
                    </table>
                    
                    <!-- <div class="mb-3">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center mb-0">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once dirname(__FILE__).'/../layouts/footer.php';?>