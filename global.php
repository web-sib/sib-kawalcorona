<section class="mt-2">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <span>
                    <h5>Corona Virus Data Global</h5>
                </span>
            </div>
        </div>
        <div class="row text-white">
            <div class="col-md-3 mt-2">
                <div class="card bg-warning" style="height: 7rem;">
                    <div class="card-body">
                        <h5>Total Positif</h5>
                        <h6 class="card-subtitle"><?= $getPositif['value']; ?> Orang</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-2">
                <div class="card bg-success" style="height: 7rem;">
                    <div class="card-body">
                        <h5>Total Sembuh</h5>
                        <h6 class="card-subtitle"><?= $getSembuh['value']; ?> Orang</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-2">
                <div class="card bg-danger" style="height: 7rem;">
                    <div class="card-body">
                        <h5>Total Meninggal</h5>
                        <h6 class="card-subtitle"><?= $getMeninggal['value']; ?> Orang</h6>
                    </div>
                </div>
            </div>
            <?php $number = $getPositif['value'];
            $parseInt = preg_replace("/[^0-9]/", "", $number);
            $int = (int) $parseInt;
            $number1 = $getSembuh['value'];
            $parseInt1 = preg_replace("/[^0-9]/", "", $number1);
            $value = (int) $parseInt1;
            $number2 = $getMeninggal['value'];
            $parseInt2 = preg_replace("/[^0-9]/", "", $number2);
            $val = (int) $parseInt2;
            ?>
            <div class="col-md-3 mt-2">
                <div class="card bg-primary" style="height: 7rem;">
                    <div class="card-body">
                        <h5>Global</h5>
                        <h6 class="card-subtitle">Total kasus</h6>
                        <p><?= number_format($int + $value + $val, 0, ",", ","); ?> Kasus</p>
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
                        <th>Nama Negara</th>
                        <th>Total positif</th>
                        <th>Total sembuh</th>
                        <th>Total meninggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php $a = 0; ?>
                    <?php while ($global = $getGlobal[$a]['attributes']) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $global['Country_Region']; ?></td>
                            <td><?= number_format($global['Confirmed'], 0, ",", ","); ?></td>
                            <td><?= number_format($global['Recovered'], 0, ",", ","); ?></td>
                            <td><?= number_format($global['Deaths'], 0, ",", ","); ?></td>
                        </tr>
                        <?php $i++;
                        $a++; ?>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>