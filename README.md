<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Branches
`git checkout main`
Ini buat pindah branch, kalo mau bikin branch baru terus langsung pindah pakenya 'git checkout -b namabranch'

`git pull`
Ini buat fetch changes yang ada di repo terus di merge ke local branch yang lagi dipake. Kalau mau update feature branch yang ketinggalan dari mainnya yang di repo pakenya -> `git pull origin main`

`git merge feature/whatever`
Ini buat merge commit dari `feature/whatever` ke branch yang lagi dipake, kalo sekarang lagi pake branch `main`, dia bakal absorb commitnya dari `feature/whatever`.

`git push --set-upstream origin branchname`
Ini buat upload branch commits yang ada di local machine ke repo.

`git branch -d feature/whatever`
buat delete branch locally, kalo mau force delete pake `-D` bukan `-d`

`git push origin --delete feature/whatever`
buat delete branch di repo

`git reset --hard origin/main`
Ini bakal rewrite/reset branch yang skrg dipake biar match `origin/main`

`git merge main` (pas lagi di feature branch)
dia bakal update branch dari main loakl yang paling baru

`git merge feature/login` (while on main)
kalo feature udah complete, perubahannya bakal di bawa ke main

`git pull origin main` (while on your feature branch)
ini bakal fetch + merge dari main

`git push origin main`
habis merge di push ke repo jadi ga di local doang