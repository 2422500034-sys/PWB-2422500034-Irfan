<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class kota2422500034_controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        is_admin_logged_in();
        $this->load->model('kota2422500034_model');
    }
    
    public function index() {
        $data['list_kota2422500034'] = $this->kota2422500034_model->get_all();
        $this->load->view('administrator/templates/header');
        $this->load->view('administrator/templates/sidebar');
        $this->load->view('administrator/kota2422500034/index', $data);
        $this->load->view('administrator/templates/footer');
    }

    public function tambah_kota2422500034()
    {
        $data['title'] = 'Tambah kota';

        $this->form_validation->set_rules('nama_kota2422500034', 'Nama kota2422500034', 'required');
        if ($this->form_validation->run() !== FALSE) {
            $this->__simpan_kota2422500034();
        } else {
            $this->load->view('administrator/templates/header', $data);
            $this->load->view('administrator/templates/sidebar');
            $this->load->view('administrator/kota2422500034/tambah_kota2422500034');
            $this->load->view('administrator/templates/footer');
        }
    }

    private function __simpan_kota2422500034()
    {
        $data = [
            'nama' => ucwords($this->input->post('nama_kota2422500034')),
            'deskripsi' => ucfirst($this->input->post('deskripsi_kota2422500034'))
        ];
        $simpan = $this->produk_kota2422500034_model->tambah($data);
        if ($simpan) {
            $this->session->set_flashdata('message', '
            <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                    <use xlink:href="#check-circle-fill" />
                </svg>
                <div>
                    Berhasil menambahkan kota2422500034!!
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
                ');
        } else {
            $this->session->set_flashdata('message', '
                <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                        <use xlink:href="#exclamation-triangle-fill" />
                    </svg>
                    <div>
                        Gagal menambahkan kota2422500034!!
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            ');
        }
        redirect('admin/kota2422500034');
    }

    public function hapus_kota2422500034($id)
{
    // check apakah ada kota2422500034
    $kota2422500034 = $this->produk_kota2422500034_model->get_by_id($id);
    if ($kota2422500034) {
        $hapus = $this->produk_kota2422500034_model->hapus($id);
        if ($hapus) {
            $this->session->set_flashdata('message', '
                <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                        <use xlink:href="#check-circle-fill" />
                    </svg>
                    <div>
                        Berhasil menghapus kota2422500034!!
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            ');
        } else {
            $this->session->set_flashdata('message', '
                <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                        <use xlink:href="#exclamation-triangle-fill" />
                    </svg>
                    <div>
                        Gagal menghapus kota2422500034!!
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            ');
        }
        redirect('admin/kota2422500034');
    } else {
        $this->session->set_flashdata('message', '
            <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                    <use xlink:href="#exclamation-triangle-fill" />
                </svg>
                <div>
                    kota2422500034 tidak ditemukan!!
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        ');
        redirect('admin/kota2422500034');
    }
}

public function ubah_kota2422500034($id)
    {
        // check dulu apakah id dengan kota2422500034 ada?
        $kota2422500034 = $this->produk_kota2422500034_model->get_by_id($id);
        if ($kota2422500034) {
            $this->form_validation->set_rules('nama_kota2422500034', 'Nama kota2422500034', 'required');
            if ($this->form_validation->run() !== FALSE) {
                $this->__ubah_kota2422500034($id);
            } else {
                $data['title'] = 'Ubah kota2422500034';
                $data['kota2422500034'] = $kota2422500034;
                $this->load->view('administrator/templates/header', $data);
                $this->load->view('administrator/templates/sidebar');
                $this->load->view('administrator/kota2422500034/ubah_kota2422500034', $data);
                $this->load->view('administrator/templates/footer');
            }
        } else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show"
                role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                    <use xlink:href="#exclamation-triangle-fill" />
                </svg>
                <div>
                    kota2422500034 tidak ditemukan!!
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
            redirect('admin/kota2422500034');
        }
    }
    private function __ubah_kota2422500034($id)
    {
        $data = [
            'nama' => ucwords($this->input->post('nama_kota2422500034')),
            'deskripsi' => ucfirst($this->input->post('deskripsi_kota2422500034'))
        ];
        $ubah = $this->produk_kota2422500034_model->ubah($data, $id);
        if ($ubah) {
            $this->session->set_flashdata('message', '
            <div class="alert alert-success d-flex align-items-center alert-dismissible fade show"
                role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                    <use xlink:href="#check-circle-fill" />
                </svg>
                <div>
                    Berhasil menambahkan kota2422500034!!
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
        } else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show"
                role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                    <use xlink:href="#exclamation-triangle-fill" />
                </svg>
                <div>
                    Gagal menambahkan kota2422500034!!
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
        }
        redirect('admin/kota2422500034');
    }
}