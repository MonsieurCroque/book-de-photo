@echo off
set count=1
set nbpage=1
copy book.php book\book.php
SETLOCAL ENABLEDELAYEDEXPANSION
if not exist book\page1 mkdir book\page1
copy "page.html" "book\page1.html"
for /r %%a in (photos\*.jpg) do (
for /f "tokens=* delims=/" %%i in ("%%a") do set pathPhoto=%%~ni
for /f "tokens=1 delims=." %%i in ("!pathPhoto!") do set name=%%i
move "%%a" "book\page"!nbpage!"\"
echo ^<div^>^<div class='frame_name'^> !name! ^</div^>^<img src= page!nbpage!\!name!.jpg alt='photoDip'^>^<div class='frame_cit'^>^</div^>^</div^>  >> book\page!nbpage!.html
set /a count += 1
if !count! == 10 (set /a count = 1 & echo ^<div class='number'^> !nbpage! ^</div^>^</div^>^</div^>^<sript type='text/javascript' src='createPage.js'^>^</sript^> >> book\page!nbpage!.html & set /a nbpage += 1 & if not exist book\page!nbpage! mkdir book\page!nbpage! & copy "page.html" "book\page!nbpage!.html"))
echo Work done!
pause > nul







