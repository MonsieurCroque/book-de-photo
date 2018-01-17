@echo off
set count=1
set nbpage=1
copy book.php book\book.php
copy "pageCSS.css" "book\pageCSS.css"
SETLOCAL ENABLEDELAYEDEXPANSION
if not exist book\page1 mkdir book\page1
copy "pagePhoto.html" "book\page1Photo.html"
copy "pageName.html" "book\page1Name.html"
for /r photos %%a in ("*.jpg") do (
for /f "tokens=* delims=/" %%i in ("%%a") do set pathPhoto=%%~ni
for /f "tokens=1 delims=." %%i in ("!pathPhoto!") do set name=%%i
move "%%a" "book\page"!nbpage!"\"
if !count! == 4 echo ^</div^>^<div class="pictures"^> >> book\page!nbpage!Photo.html
if !count! == 7 echo ^</div^>^<div class="pictures"^> >> book\page!nbpage!Photo.html
if !count! == 10 echo ^</div^> >> book\page!nbpage!Photo.html
echo ^<div class="frame"^> ^<img src=page!nbpage!\!name!.jpg alt="photoDip"^> ^</img^>^</div^> >> book\page!nbpage!Photo.html
if !count! == 4 echo ^</div^>^<div class="names_line"^> >> book\page!nbpage!Name.html
if !count! == 7 echo ^</div^>^<div class="names_line"^> >> book\page!nbpage!Name.html
if !count! == 10 echo ^</div^> >> book\page!nbpage!Name.html
echo ^<div class="names"^> !name! ^</div^> >> book\page!nbpage!Name.html
set /a count += 1
if !count! == 10 (set /a count = 1 & echo ^<div class="pageNumber"^>!nbpage!^</div^>^</div^> >> book\page!nbpage!Name.html & set /a nbpage += 1 & if not exist book\page!nbpage! mkdir book\page!nbpage! & copy "pageName.html" "book\page!nbpage!Name.html" & copy "pagePhoto.html" "book\page!nbpage!Photo.html"))
echo Work done!
pause > nul