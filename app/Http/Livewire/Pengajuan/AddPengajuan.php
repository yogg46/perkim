<?php

namespace App\Http\Livewire\Pengajuan;

use App\Models\Pengajuan;
use App\Models\type_bangunan;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;

use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;


class AddPengajuan extends Component
{
    use LivewireAlert;


    public $dev, $nama_dev, $alamat_dev, $no_hp, $asosiasi, $no_asosiasi, $date, $tahun;




    public function render()
    {
        return view('livewire.pengajuan.add-pengajuan', [])
            ->extends(
                'layouts.main',
                [
                    'tittle' => 'Pengajuan',
                    'slug1' => ''
                ]
            )
            ->section('isi');
    }





    protected $rule = [
        'dev' => 'required',
        'nama_dev' => 'required',

    ];
    public $step;

    public $pengajuans;

    private $stepActions = [
        'submit2',
        'submit3',
        'submit4',
        'submit5',
    ];

    public function mount()
    {
        $this->step = 0;
    }

    public function minus()
    {
        $this->step--;
    }
    public function plus()
    {
        $this->step++;
    }
    public function jump($to)
    {
        $this->step = $to;
    }
    public function submit()
    {

        $action = $this->stepActions[$this->step];

        $this->$action();
    }

    public function submit2()
    {
        $this->validate([
            'dev' => 'required',
            'nama_dev' => 'required',
            'alamat_dev' => 'required',
            'no_hp' => 'required',
            'asosiasi' => 'required',
            'no_asosiasi' => 'required',
        ]);


        if ($this->pengajuans) {
            $this->pengajuans = tap($this->pengajuans)->update(
                [
                    'dev' => $this->dev,
                    'nama_dev' => $this->nama_dev,
                    'no_hp' => $this->no_hp,
                    'alamat_dev' => $this->alamat_dev,
                    'pengaju' => Auth::user()->id,

                    'asosiasi' => $this->asosiasi,
                    'no_asosiasi' => $this->no_asosiasi,
                ]
            );
            $this->alert('success', 'Data Berhasil Diupdate', [
                'position' => 'top-right',
                'timer' => 3000,
                'toast' => true,
            ]);
        } else {
            $this->pengajuans = Pengajuan::create(
                [
                    'dev' => $this->dev,
                    'nama_dev' => $this->nama_dev,
                    'no_hp' => $this->no_hp,
                    'pengaju' => Auth::user()->id,
                    'date' => Carbon::now()->format('d-m-Y'),
                    'tahun' => Carbon::now()->year,
                    'alamat_dev' => $this->alamat_dev,
                    'asosiasi' => $this->asosiasi,
                    'no_asosiasi' => $this->no_asosiasi,

                ]
            );
            $this->alert('success', 'Data Berhasil Disimpan', [
                'position' => 'top-right',
                'timer' => 3000,
                'toast' => true,
            ]);
        }
        $this->pengajuan_id = $this->pengajuans->id;
        $this->step++;
    }

    public $nama_pro, $alamat_pro, $pemohon1, $pemohon2, $tel_pemohon1, $tel_pemohon2, $psu, $kavling, $total;
    public function submit3()
    {
        $this->validate([
            'nama_pro' => 'required',
            'alamat_pro' => 'required',
            'pemohon1' => 'required',
            'tel_pemohon1' => 'required',

            'psu' => 'required',
            'kavling' => 'required',
            'total' => 'required',

        ]);
        $this->pengajuans = tap($this->pengajuans)->update([
            'nama_pro' => $this->nama_pro,
            'alamat_pro' => $this->alamat_pro,
            'pemohon1' => $this->pemohon1,
            'tel_pemohon1' => $this->tel_pemohon1,
            'pemohon2' => $this->pemohon2,
            'tel_pemohon2' => $this->tel_pemohon2,
            'psu' => $this->psu,
            'kavling' => $this->kavling,
            'total' => $this->total,
        ]);
        $this->alert('success', 'Data Berhasil Diupdate', [
            'position' => 'top-right',
            'timer' => 3000,
            'toast' => true,
        ]);
        $this->pengajuan_id = $this->pengajuans->id;
        $this->step++;
    }

    public $type, $jumlah, $kategori, $pengajuan_id, $total_kavling;

    public function submit4()
    {
        $this->pengajuan_id = $this->pengajuans->id;

        // $this->store();
        $this->step++;
    }
    public function submit5()
    {

        //
        $this->step++;
    }
    // ini input bangunan


    public $updateMode = false;
    public $inputs = [];
    public $i = 1;

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs, $i);
    }
    public function remove($i)
    {
        unset($this->inputs[$i]);
    }


    private function resetInputFields()
    {
        // $this->name = '';
        // $this->email = '';
    }
    public $bangun;

    public function store()
    {
        $this->pengajuan_id = $this->pengajuans->id;

        $validatedDate = $this->validate(
            [
                'type.0' => 'required',
                'jumlah.0' => 'required',
                'kategori.0' => 'required',
                // 'pengajuan_id.0' => 'required',
                'type.*' => 'required',
                'jumlah.*' => 'required',
                'kategori.*' => 'required',
                // 'pengajuan_id.*' => 'required',
            ],
            [
                'type.0.required' => 'type field is required',
                'jumlah.0.required' => 'jumlah field is required',
                // 'kategori.0.required' => 'kategori field is required',
                'pengajuan_id.0.required' => 'pengajuan_id field is required',
                'type.*.required' => 'type field is required',
                'jumlah.*.required' => 'jumlah field is required',
                'kategori.*.required' => 'kategori field is required',
                // 'pengajuan_id.*.required' => 'pengajuan_id field is required',
            ]
        );

        foreach ($this->type as $key => $value) {
            $this->bangun = type_bangunan::create([
                'pengajuan_id' => $this->pengajuan_id,
                'type' => $this->type[$key],
                'jumlah' => $this->jumlah[$key],
                'kategori' => $this->kategori[$key]
            ]);
        }

        $this->alert('success', 'Data Berhasil Diupdate', [
            'position' => 'top-right',
            'timer' => 3000,
            'toast' => true,
        ]);


        $this->total_kavling = type_bangunan::where('pengajuan_id', $this->pengajuan_id)->sum('jumlah');

        $this->pengajuans = tap($this->pengajuans)->update([
            'total_kavling' => $this->total_kavling
        ]);
    }
}