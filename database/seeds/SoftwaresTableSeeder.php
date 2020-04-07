<?php

use Illuminate\Database\Seeder;
use App\Software;

class SoftwaresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Software::create([
            'name' => 'Rapid typing (Gõ mười ngón)',
            'url' => 'https://rapidtyping.vi.softonic.com/'
        ]);
        Software::create([
            'name' => 'Bộ cài office (word, powponit, excel)',
            'url' => 'https://www.microsoft.com/vi-vn/download/office.aspx'
        ]);
        Software::create([
            'name' => 'Cisco Packet Tracer (lab ccna)',
            'url' => 'https://www.netacad.com/courses/packet-tracer'
        ]);
        Software::create([
            'name' => 'GNS3 (lab cnna)',
            'url' => 'https://www.gns3.com/software/download'
        ]);
        Software::create([
            'name' => 'VMWare Workstation',
            'url' => 'https://www.vmware.com/products/workstation-pro/workstation-pro-evaluation.html'
        ]);
        Software::create([
            'name' => 'Dreamwaver (Học HTML)',
            'url' => 'https://www.adobe.com/products/dreamweaver.html'
        ]);
        Software::create([
            'name' => 'Photoshop',
            'url' => 'https://www.adobe.com/products/photoshop.html'
        ]);
        Software::create([
            'name' => 'Vandyke secure(Hỗ trợ truy cập router)',
            'url' => 'https://www.vandyke.com/'
        ]);
    }
}
