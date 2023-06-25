<?php

namespace Bank;

use App\DB\DataBase;

class FileWriter implements DataBase
{
    private $data, $fileName;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;
        if (!file_exists(__DIR__ . '/../data/' . $fileName . '.json')) {
            $this->data = [];
        } else {
            $this->data = json_decode(file_get_contents(__DIR__ . '/../data/' . $fileName . '.json'), 1);
        }
    }

    public static function generateIban()
    {

        $bankAccountNumber = sprintf('%016d', mt_rand(0, 99999999999999));
        $countryCode = 'LT';
        $iban = $countryCode . '00' . $bankAccountNumber;
        $ibanDigits = str_split($iban);
        $checksum = 0;
        foreach ($ibanDigits as $digit) {
            $checksum = ($checksum * 10 + intval($digit)) % 97;
        }
        $checksumDigits = sprintf('%02d', 98 - $checksum);
        $iban = substr_replace($iban, $checksumDigits, 2, 2);

        return $iban;
    }


    public function create(array $userData): void
    {
        $id = rand(100000000, 999999999);
        $userData['id'] = $id;
        $accountNumber = Filewriter::generateIban();
        $userData['accountNumber'] = $accountNumber;
        $balance = 0;
        $userData['balance'] = $balance;
        $this->data[] = $userData;
    }



    public function __destruct()
    {
        $this->data = array_values($this->data);
        file_put_contents(__DIR__ . '/../data/' . $this->fileName . '.json', json_encode($this->data));
    }


    public function update(int $userId, array $userData): void
    {
        foreach ($this->data as $key => $user) {
            if ($user['id'] == $userId) {
                $userData['id'] = $userId; // for safety
                $this->data[$key] = $userData;
            }
        }
    }

    public function updateAdd(int $userId, array $userData): void
    {
        foreach ($this->data as $key => $user) {
            if ($user['id'] == $userId) {
                $userData['id'] = $userId; // for safety
                $oldBalance = $user['balance'];
                $newBalance = $_POST['amount'];
                $userData['balance'] = $oldBalance + $newBalance;
                $userData['name'] = $user['name'];
                $userData['lastName'] = $user['lastName'];
                $userData['personalId'] = $user['personalId'];
                $userData['accountNumber'] = $user['accountNumber'];

                $this->data[$key] = $userData;
            }
        }
    }


    public function updateDeduct(int $userId, array $userData): void
    {
        foreach ($this->data as $key => $user) {
            if ($user['id'] == $userId) {
                $userData['id'] = $userId; // for safety
                $userData['name'] = $user['name'];
                $userData['lastName'] = $user['lastName'];
                $userData['personalId'] = $user['personalId'];
                $userData['accountNumber'] = $user['accountNumber'];
                $amount = $_POST['amount'];
                $oldBalance = $user['balance'];
                if ($amount <= $oldBalance) {
                    $userData['balance'] = $oldBalance - $amount;
                    $this->data[$key] = $userData;
                } else {
                    $userData['balance'] = $oldBalance;
                    $this->data[$key] = $userData;
                }
            }
        }
    }

    public function delete(int $userId): void
    {
        foreach ($this->data as $key => $user) {
            if ($user['id'] == $userId) {
                unset($this->data[$key]);
            }
        }
    }

    public function show(int $userId): array
    {
        foreach ($this->data as $key => $user) {
            if ($user['id'] == $userId) {
                return $this->data[$key];
            }
        }
    }

    public function showAll(): array
    {
        return $this->data;
    }
}
