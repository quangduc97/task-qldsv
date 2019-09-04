<?php
require "goc.php";
class quantri extends goc {
    function Lop_Them($id_lop, $ten_lop) {
        $sql = "INSERT INTO lop SET MaLop='$id_lop', TenLop='$ten_lop'";
        $kq = $this->db->query($sql);
        if(!$kq) die($this->db->error);
        return $kq;
    }

    function Lop_Load() {
        $sql = "SELECT * FROM lop";
        $kq = $this->db->query($sql);
        if(!$kq) die($this->db-error);
        return $kq;
    }

    function Lop_ChiTiet($id_lop) {
        $sql = "SELECT * FROM lop WHERE MaLop='$id_lop'";
        $kq = $this->db->query($sql);
        if(!$kq) die($this->db->error);
        return $kq;
    }

    function Lop_Sua($id_lop, $ten_lop) {
        $sql = "UPDATE lop SET TenLop='$ten_lop' WHERE MaLop='$id_lop'";
        $kq = $this->db->query($sql);
        if(!$kq) die($this->db->error);
    }

    function Lop_Xoa($id_lop) {
        $sql = "DELETE FROM lop WHERE MaLop='$id_lop'";
        $kq = $this->db->query($sql);
        if(!$kq) die($this->db->error);
    }

    function SV_Them($id_sv, $ten_sv, $id_lop) {
        $sql = "INSERT INTO sinhvien SET MaSV='$id_sv', HotenSV='$ten_sv', Lop='$id_lop'";
        $kq = $this->db->query($sql);
        if(!$kq) die($this->db->error);
        return $kq;
    }

    function SV_Load() {
        $sql = "SELECT * FROM sinhvien";
        $kq = $this->db->query($sql);
        if(!$kq) die($this->db-error);
        return $kq;
    }

    function SV_ChiTiet($id_sv) {
        $sql = "SELECT * FROM sinhvien WHERE MaSV='$id_sv'";
        $kq = $this->db->query($sql);
        if(!$kq) die($this->db->error);
        return $kq;
    }

    function SV_Sua($id_sv, $ten_sv, $id_lop) {
        $sql = "UPDATE sinhvien SET HotenSV='$ten_sv', Lop='$id_lop' WHERE MaSV='$id_sv'";
        $kq = $this->db->query($sql);
        if(!$kq) die($this->db->error);
    }

    function SV_Xoa($id_sv) {
        $sql = "DELETE FROM sinhvien WHERE MaSV='$id_sv'";
        $kq = $this->db->query($sql);
        if(!$kq) die($this->db->error);
    }

    function MH_Them($id_mh, $ten_mh) {
        $sql = "INSERT INTO monhoc SET MaMH='$id_mh', TenMH='$ten_mh'";
        $kq = $this->db->query($sql);
        if(!$kq) die($this->db->error);
        return $kq;
    }

    function MH_Load() {
        $sql = "SELECT * FROM monhoc";
        $kq = $this->db->query($sql);
        if(!$kq) die($this->db-error);
        return $kq;
    }

    function MH_ChiTiet($id_mh) {
        $sql = "SELECT * FROM monhoc WHERE MaMH='$id_mh'";
        $kq = $this->db->query($sql);
        if(!$kq) die($this->db->error);
        return $kq;
    }

    function MH_Sua($id_mh, $ten_mh) {
        $sql = "UPDATE monhoc SET TenMH='$ten_mh' WHERE MaMH='$id_mh'";
        $kq = $this->db->query($sql);
        if(!$kq) die($this->db->error);
    }

    function MH_Xoa($id_mh) {
        $sql = "DELETE FROM monhoc WHERE MaMH='$id_mh'";
        $kq = $this->db->query($sql);
        if(!$kq) die($this->db->error);
    }

    function Diem_Them($id_sv, $id_mh) {
        $sql = "INSERT INTO diem SET SV='$id_sv', MH='$id_mh'";
        $kq = $this->db->query($sql);
        if(!$kq) die($this->db->error);
        return $kq;
    }

    function Diem_Load() {
        $sql = "select SV, sinhvien.HotenSV,  MH, monhoc.TenMH from diem, sinhvien, monhoc where diem.SV = sinhvien.MaSV and diem.MH = monhoc.MaMH";
        $kq = $this->db->query($sql);
        if(!$kq) die($this->db-error);
        return $kq;
    }

    function Diem_ChiTiet($id_sv, $id_mh) {
        $sql = "SELECT * FROM diem WHERE SV='$id_sv' and MH='$id_mh'";
        $kq = $this->db->query($sql);
        if(!$kq) die($this->db->error);
        return $kq;
    }

    function Diem_Sua($id_sv1, $id_sv2, $id_mh1, $id_mh2) {
        $sql = "UPDATE diem SET SV='$id_sv1', MH='$id_mh1' WHERE SV='$id_sv2' and MH='$id_mh2'";
        $kq = $this->db->query($sql);
        if(!$kq) die($this->db->error);
    }

    function Diem_Xoa($id_sv, $id_mh) {
        $sql = "DELETE FROM diem WHERE SV='$id_sv' and MH='$id_mh'";
        $kq = $this->db->query($sql);
        if(!$kq) die($this->db->error);
    }

    function Diem_Nhap($sv, $mh, $cc, $gk, $ck) {
        $sql = "UPDATE diem SET chuyencan='$cc', giuaky='$gk', cuoiky='$ck' where SV='$sv' and MH='$mh'";
        $kq = $this->db->query($sql);
        if(!$kq) die($this->db->error);
        return $kq;
    }
}
?>