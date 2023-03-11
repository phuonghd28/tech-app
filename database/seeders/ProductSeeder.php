<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'Camera IP 2MP bán cầu DS-2CD1323G0E-ID',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549177/anhcamera_lpaocq.jpg',
                'description' => '',
                'category_id' => 1
            ],
            [
                'id' => 2,
                'name' => 'Camera IP 2MP thân trụ DS-2CD1023G0E-ID',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549215/2b76d_k06isk.jpg',
                'description' => '',
                'category_id' => 1
            ],
            [
                'id' => 3,
                'name' => 'Camera wifi dome IPC-A22EP-AG',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549223/3_xd1zgb.jpg',
                'description' => '',
                'category_id' => 1
            ],
            [
                'id' => 4,
                'name' => 'Camera wifi thân IPC-F22FP',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549230/camera1_g5vmaq.jpg',
                'description' => '',
                'category_id' => 1
            ],
            [
                'id' => 5,
                'name' => 'Đầu ghi hình IP 4 kênh vỏ sắt DS-7104NI-Q1M',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549239/giai-phap-nha-thong-minh-2_jtzard.jpg',
                'description' => '',
                'category_id' => 1
            ],
            [
                'id' => 6,
                'name' => 'Đầu ghi hình IP 8 kênh DS-7108NI-Q1M',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549245/3742_dau_ghi_hinh_hikvision_ds_7108ni_q1_m_hbda90.jpg',
                'description' => '',
                'category_id' => 1
            ],
            [
                'id' => 7,
                'name' => 'Ổ cứng 2TB WD',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549251/%C3%94%CC%89-c%C6%B0%CC%81ng-HDD-Western-Purple-2Tb-SATA3-5400rpm_azss42.jpg',
                'description' => '',
                'category_id' => 1
            ],
            [
                'id' => 8,
                'name' => 'Ổ cứng 4TB WD',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549259/18466_8e89ca7772228b499a6db249096cf5ff__1__h8jol0.jpg',
                'description' => '',
                'category_id' => 1
            ],
            [
                'id' => 9,
                'name' => 'Thẻ nhớ sandisk 32GB',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549266/thenho32gb_v1hzpq.webp',
                'description' => '',
                'category_id' => 1
            ],
            [
                'id' => 10,
                'name' => 'Thẻ nhớ sandisk 64GB',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549275/thenho64gb_bxrxws.webp',
                'description' => '',
                'category_id' => 1
            ],
            [
                'id' => 11,
                'name' => 'Thẻ nhớ sandisk 128GB',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549287/thenho1_vwsyvv.jpg',
                'description' => '',
                'category_id' => 1
            ],
            [
                'id' => 12,
                'name' => 'Bộ mở rộng wifi RG-EW1200R',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549326/580x580-1669366163-single_product1-bophatwifiruijiergew1200r1_pqp08v.jpg',
                'description' => '',
                'category_id' => 2
            ],
            [
                'id' => 13,
                'name' => 'Switch  TL-SF1005D',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549335/anh_x9kms6.jpg',
                'description' => '',
                'category_id' => 2
            ],
            [
                'id' => 14,
                'name' => 'Switch  TL-SF1008D',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549341/1591584982_11093-tp-link-switch-8-porttl-sf1008d_etuipu.jpg',
                'description' => '',
                'category_id' => 2
            ],
            [
                'id' => 15,
                'name' => 'Switch  TL-SF1016D',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549347/1159-2112_switch_tp_link_16p_1_glblbm.jpg',
                'description' => '',
                'category_id' => 2
            ],
            [
                'id' => 16,
                'name' => 'Switch 4 cổng POE  RG-ES106D-P V2',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549352/15698_g1ymcy.png',
                'description' => '',
                'category_id' => 2
            ],
            [
                'id' => 17,
                'name' => 'Switch 4 cổng POE RG-ES205GC-P',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549358/3-e6ff33b0-f7d8-4f84-81c9-20bb99276e3e_wd6vqv.webp',
                'description' => '',
                'category_id' => 2
            ],
            [
                'id' => 18,
                'name' => 'Switch 8 cổng POE RG-ES209GC-P',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549364/image2_gwd9ho.png',
                'description' => '',
                'category_id' => 2
            ],
            [
                'id' => 19,
                'name' => 'Switch RG-ES05',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549369/p_61434_RUIJIE-RG-ES05_edlmcl.jpg',
                'description' => '',
                'category_id' => 2
            ],
            [
                'id' => 20,
                'name' => 'Switch RG-ES08',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549374/ES08_gnlwll.jpg',
                'description' => '',
                'category_id' => 2
            ],
            [
                'id' => 21,
                'name' => 'Thiết bị phát wifi Archer A5',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549380/38554_tp_link_archer_c60_ha1_b3yes9.jpg',
                'description' => '',
                'category_id' => 2
            ],
            [
                'id' => 22,
                'name' => 'Thiết bị phát wifi Archer A8',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549386/anh2_fttsvf.jpg',
                'description' => '',
                'category_id' => 2
            ],
            [
                'id' => 23,
                'name' => 'Thiết bị phát wifi RG-EW300 PRO',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549392/rg-ew300-pro_q61wve.webp',
                'description' => '',
                'category_id' => 2
            ],
            [
                'id' => 24,
                'name' => 'Thiết bị phát wifi RG-EW1200',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549402/2_ngn0ox.jpg',
                'description' => '',
                'category_id' => 2
            ],
            [
                'id' => 25,
                'name' => 'Thiết bị phát wifi RG-EW1200G Pro',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549415/Router-WiFi-Ruijie-RG-EW1200G-PRO-Chinh-Hang-_-Bang-Tan-Kep-Toc-Do-1267Mbps-Chiu-Tai-30-User-16_qplbop.jpg',
                'description' => '',
                'category_id' => 2
            ],
            [
                'id' => 26,
                'name' => 'Thiết bị phát wifi RG-RAP1200(F)',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549423/6264_thiet_bi_mang_wifi_ruijie_rg_rap1200f_ohnmlk.jpg',
                'description' => '',
                'category_id' => 2
            ],
            [
                'id' => 27,
                'name' => 'Thiết bị phát wifi RG-RAP2200(F)',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549430/bo-phat-wifi-op-tran-hoac-gan-tuong-ruijie-reyee-rg-rap2200f_ophqzw.jpg',
                'description' => '',
                'category_id' => 2
            ],
            [
                'id' => 28,
                'name' => 'wifi mesh Halo H50G (3 packs)',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549438/halo_h50g_maefwp.jpg',
                'description' => '',
                'category_id' => 2
            ],
            [
                'id' => 29,
                'name' => 'Két sắt thông minh',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549448/BJW-ket-sat-thong-minh-ks90k1dt_meezqv.jpg',
                'description' => '',
                'category_id' => 3
            ],
            [
                'id' => 30,
                'name' => 'Máy in',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549455/2167_chinh_dien_may_in_canon_laser_printer_lbp_2900_ybflo3.jpg',
                'description' => '',
                'category_id' => 3
            ],
            [
                'id' => 31,
                'name' => 'Máy scan',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549459/scan_bsvy1r.jpg',
                'description' => '',
                'category_id' => 3
            ],
            [
                'id' => 32,
                'name' => 'Robot hút bụi',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549479/robot-hut-bui-lau-nha-liectroux-zk901-1_qqrmjk.jpg',
                'description' => '',
                'category_id' => 3
            ],
            [
                'id' => 33,
                'name' => 'Thùng rác thông minh',
                'image' => 'https://res.cloudinary.com/dscpuvtce/image/upload/v1678549484/1_vtvmih.jpg',
                'description' => '',
                'category_id' => 3
            ],
            [
                'id' => 34,
                'name' => 'iMac 24 inch 2021 M1 4.5K/8-core GPU',
                'image' => 'https://cdn.tgdd.vn/Products/Images/5698/238056/imac-24-icnh-2021-m1-thumb-hong-1-600x600.jpg',
                'description' => '',
                'category_id' => 4
            ],
            [
                'id' => 35,
                'name' => 'HP AIO 22 dd2002d i5 1235U 21.5 inch (6K7G1PA)',
                'image' => 'https://cdn.tgdd.vn/Products/Images/5698/293648/hp-aio-22-dd2002d-i5-6k7g1pa-thumb-1-600x600.jpg',
                'description' => '',
                'category_id' => 4
            ],
            [
                'id' => 36,
                'name' => 'HP AIO ProOne 240 G9 i3 1215U 23.8 inch (6M3T0PA)',
                'image' => 'https://cdn.tgdd.vn/Products/Images/5698/293649/hp-aio-proone-240-g9-i3-6m3t0pa-thumb-1-600x600.jpg',
                'description' => '',
                'category_id' => 4
            ],
            [
                'id' => 37,
                'name' => 'iMac 24 inch M1 2021 4.5K/7-core GPU',
                'image' => 'https://cdn.tgdd.vn/Products/Images/5698/238061/imac-24-icnh-2021-m1-thumb-bac-1-600x600.jpg',
                'description' => '',
                'category_id' => 4
            ],
        ]);
    }
}
