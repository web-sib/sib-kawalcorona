<section class="mt-2">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <span>
                    <h5>Corona Virus Data Indonesia</h5>
                </span>
            </div>
        </div>
        <div class="row text-white">
            <div class="col-md-3 mt-2">
                <div class="card bg-warning" style="height: 7rem;">
                    <div class="card-body">
                        <h5>Total Positif</h5>
                        <h6 class="card-subtitle"><?= $getResult['positif']; ?> Orang</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-2">
                <div class="card bg-success" style="height: 7rem;">
                    <div class="card-body">
                        <h5>Total Sembuh</h5>
                        <h6 class="card-subtitle"><?= number_format($getResult['sembuh'], 0, ",", ","); ?> Orang</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-2">
                <div class="card bg-danger" style="height: 7rem;">
                    <div class="card-body">
                        <h5>Total Meninggal</h5>
                        <h6 class="card-subtitle"><?= number_format($getResult['meninggal'], 0, ",", ","); ?> Orang</h6>.
                    </div>
                </div>
            </div>
            <?php $number = $getResult['positif'];
            $parseInt = preg_replace("/[^0-9]/", "", $number);
            $int = (int) $parseInt; ?>
            <div class="col-md-3 mt-2">
                <div class="card bg-primary" style="height: 7rem;">
                    <div class="card-body">
                        <h5>IND</h5>
                        <h6 class="card-subtitle"><?= $getResult['name']; ?></h6>
                        <p><?= number_format($int + $getResult['sembuh'] + $getResult['meninggal'], 0, ",", ","); ?> Kasus</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center mt-4">
            <div class="col">
                <?php date_default_timezone_set('Asia/Jakarta'); ?>
                <span>Sumber data: Kementerian Kesehatan & JHU: terakhir update pada <?= date("d-m-y h:i:sa"); ?></span>
            </div>
        </div>
    </div>
</section>

<section class="mt-3">
    <div class="container">
        <div class="table-responsive">
            <table class="table table-bordered" id="table1">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Prov.</th>
                        <th>Total positif</th>
                        <th>Total sembuh</th>
                        <th>Total meninggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php $a = 0; ?>
                    <?php while ($prov = $getProv[$a]['attributes']) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $prov['Provinsi']; ?></td>
                            <td><?= $prov['Kasus_Posi']; ?></td>
                            <td><?= $prov['Kasus_Semb']; ?></td>
                            <td><?= $prov['Kasus_Meni']; ?></td>
                        </tr>
                        <?php $i++;
                        $a++; ?>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>