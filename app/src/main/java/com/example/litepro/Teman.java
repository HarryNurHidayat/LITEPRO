package com.example.litepro;

import java.io.Serializable;

public class Teman implements Serializable {
    String id;
    String nama;
    String telpon;

    // Jika ingin menggunakan parameter yang kosong maka harus menggunkan getter dan setter
    public Teman(){

    }

    // Jika ingin menggunakan ini maka datanya akan tersimpan pada public class teman
    public Teman(String id, String nama, String telpon){
        this.id = id;
        this.nama = nama;
        this.telpon = telpon;
    }

    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }

    public String getNama() {
        return nama;
    }

    public void setNama(String nama) {
        this.nama = nama;
    }

    public String getTelepon() {
        return telpon;
    }

    public void setTelepon(String telepon) {
        this.telpon = telpon;
    }
}
