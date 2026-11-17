<div class="container mb-3 mt-4">
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-1 text-center">
            <h4>Profil</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-small">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">profil</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">Data Pelanggan</div>
                <div class="card-body">
                    <table class="table table-borderless mb-0">
                        <tr>
                            <th style="width: 30%">Nama Lengkap</th>
                            <td><?= htmlspecialchars($pelanggan['nama_pelanggan']) ?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?= htmlspecialchars($pelanggan['email']) ?></td>
                        </tr>
                        <tr>
                            <th>No Telpon</th>
                            <td><?= htmlspecialchars($pelanggan['telp_pelanggan']) ?></td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td><?= htmlspecialchars($pelanggan['alamat']) ?></td>
                        </tr>
                        <tr>
                            <th>Kota</th>
                            <td><?= htmlspecialchars($pelanggan['kota']) ?></td>
                        </tr>
                        <tr>
                            <th>Kode Pos</th>
                            <td><?= htmlspecialchars($pelanggan['kode_pos']) ?></td>
                        </tr>
                        <tr>
                            <th>Provinsi</th>
                            <td><?= htmlspecialchars($pelanggan['provinsi']) ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>