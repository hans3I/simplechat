<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Branches
`git checkout main`
This switches your working directory to the branch named `main`. Whatever files belong to that branch become your local files. If you had uncommitted changes that conflict, Git blocks the switch.

`git pull`
This is shorthand for “fetch remote changes and merge them into the branch you’re currently on.” It updates your local `main` to match `origin/main`. If there were changes on the server you didn’t have, they get merged in.

`git checkout -b feature/whatever`
`-b` literally means “create a new branch and switch to it.”
This creates `feature/whatever` FROM the branch you were on (in this case, main).

`git pull origin main`
This means “pull the branch named main from the remote named origin.”
This keeps your feature branch synced with the latest main so you don’t end up with monster conflicts later.
Without the explicit syntax, `git pull` pulls the branch that your branch is tracking.
Here you’re telling Git exactly which branch to merge into your current one.

`git merge feature/whatever`
This merges the commits from `feature/whatever` into whatever branch you're currently on. If you're on `main`, then main absorbs the changes. If both branches touched the same lines, Git triggers conflicts.

`git push --set-upstream origin branchname`
Uploads your current branch’s commits to the remote that branch tracks. If it’s a new branch, GitHub creates it.

`git branch -d feature/whatever`
Deletes the branch locally.
The `-d` means “delete if it’s already merged.”
If you try deleting a branch that still has unmerged commits, Git will block it.
If you want to force-delete, it’s `-D` (capital D).

`git push origin --delete feature/whatever`
Deletes the branch from the remote.
This keeps GitHub clean instead of letting old branches rot forever.

`git reset --hard origin/main`
This is the nuclear option.
It rewrites your current branch so that its HEAD matches `origin/main` exactly, destroying all local commits and replacing your working files with whatever origin/main contains.
If you had work in that branch, it’s gone unless you saved it somewhere else.