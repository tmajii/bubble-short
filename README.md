#Pseudocode Bubble Sort:

PROCEDURE bubbleSort(array)
    n = panjang array
    
    UNTUK i = 0 SAMPAI n-2 LAKUKAN
        UNTUK j = 0 SAMPAI n-i-2 LAKUKAN
            JIKA array[j] > array[j+1] MAKA
                temp = array[j]
                array[j] = array[j+1]
                array[j+1] = temp
            AKHIR JIKA
        AKHIR UNTUK
    AKHIR UNTUK
    
    RETURN array
AKHIR PROCEDURE
    

Penjelasan:

    Loop luar (i): Menentukan berapa kali proses pengurutan dilakukan (n-1 kali)
    Loop dalam (j): Membandingkan elemen yang berdekatan
    Perbandingan: Jika elemen kiri > elemen kanan, tukar posisinya
    Hasil: Elemen terbesar akan "mengapung" ke posisi akhir setiap iterasi
