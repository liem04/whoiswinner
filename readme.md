## Đề
### Chữ số vô vị
Tab là người rất ghét chữ số 0. Cậu ta nghĩ đây là chữ số vô vị nhất trong 10 chữ số. Nhưng Shift lại cho rằng chữ số 0 là một chữ số ý nghĩa, chỉ cần thêm bớt 1 chữ số 0, giá trị của một số hoàn toàn thay đổi.
Tuy nhiên, Tab nói rằng có nhiều phép tính dù có chữ số 0 hay không thì tính đúng đắn của phép vẫn không thay đổi.
Shift không hoàn toàn tin vào điều đó. Nên Tab và Shift đã thử thực hiện với phép tính cộng: a+b=c. Trong đó, a và b là các số nguyên dương, c là tổng của hai số đó. Đầu tiên, Shift thực hiện phép tính. Rồi Tab sẽ xóa toàn bộ các chữ số 0 trong phép tính. Liệu rằng, các số mới có tạo được thành đẳng thức, tính đúng đắn của phép tính có được đảm bảo?
Ví dụ, với phép tính: 104+105=209, nếu xóa toàn bộ các chữ số 0 thì phép tính 14+15=29 vẫn đảm bảo tính đúng đắn. Tuy nhiên, với phép tính: 107+108=215, nếu xóa toàn bộ các chữ số 0 thì phép tính mới là 17+18=215 không phải một phép tính đúng.

- Đầu vào:
Một dòng duy nhất chứa 2 số nguyên dương a và b (1 <= a, b <= 10^9).
- Đầu ra: 
In ra Tab nếu phép tính cộng của 2 số đã cho vẫn đảm bảo tính đúng đắn dù xóa đi toàn bộ chữ số 0, ngược lại in ra Shift.

Ví dụ:  
Đầu vào
- 101 102  

Đầu ra
- Tab

Đầu vào
- 105 106

Đầu ra
- Shift

## Cài đặt
Required: php >= 8.0
```
composer install
```
- Chạy simple version:
```
php SimpleVersion.php < test.txt
```

- Chạy với cách dùng OOP thường: 
```
php OOPVersionSolver.php < test.txt
```
- Chạy dùng DDD: 
```
php DDDVersion.php < test.txt
```

Bài này tôi mượn của ông Khoaipx - Topcv (https://github.com/khoaipx)
