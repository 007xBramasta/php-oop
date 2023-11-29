<?php

class SocialMedia
{
    public string $name;
}

final class Facebook extends SocialMedia
{
    final public function login(string $username, string $password): bool
    {
        return true;
    }
}

//error
class Fakefacebook extends Facebook //FINAL CLASS TIDAK BISA DI TURUNKAN ATAU EXTENDS
{
    public function login(string $username, string $password): bool //FINAL FUNCTION TIDAK BISA DI OVERRIDE
    {
        return false;
    }
}