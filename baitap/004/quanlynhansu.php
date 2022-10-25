<?php
class NhanVien
{
    public string $Ho;
    public string $Ten;
    public $NgaySinh;
    public string $DiaChi;
    public string $ViTriCongViec;
    public array $mang = [];
    public function __construct($Ho = '', $Ten = '', $NgaySinh = 0, $DiaChi = '', $ViTriCongViec = '')
    {
        $this->Ho = $Ho;
        $this->Ten = $Ten;
        $this->NgaySinh = $NgaySinh;
        $this->DiaChi = $DiaChi;
        $this->ViTriCongViec = $ViTriCongViec;
    }
    public function getInfo()
    {
        return [
            "Ho" => $this->getHo(),
            "Ten" => $this->getTen(),
            "NgaySinh" => $this->getNgaySinh(),
            "DiaChi" => $this->getDiaChi(),
            "ViTriCongViec" => $this->getViTriCongViec()
        ];
    }
    //54010000824862
    public function getHo()
    {
        return $this->Ho;
    }
    public function getTen()
    {
        return $this->Ten;
    }
    public function getNgaySinh()
    {
        return $this->NgaySinh;
    }
    public function getDiaChi()
    {
        return $this->DiaChi;
    }
    public function getViTriCongViec()
    {
        // return $this->ViTriCongViec;
         
    }
}
$objNhanVien = new NhanVien(1, 2, 2, 3, 4);
echo '<pre>';
print_r($objNhanVien);
echo '</pre>';


