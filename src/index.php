<?php
require 'includes/header.php';

$currentRelease = 'Release 0.7.2 Beta';

$fullTagName = 'v0.7.2-beta';

$versionNumber = '0.7.2';

$downloadAppImage = "https://github.com/FreeTubeApp/FreeTube/releases/download/$fullTagName/FreeTube-$versionNumber.AppImage";
$downloadDebx86 = "https://github.com/FreeTubeApp/FreeTube/releases/download/$fullTagName/FreeTube_$versionNumber_amd64.deb";
$downloadDebArm = "https://github.com/FreeTubeApp/FreeTube/releases/download/$fullTagName/FreeTube_$versionNumber_arm64.deb";
$downloadRpmArm = "https://github.com/FreeTubeApp/FreeTube/releases/download/$fullTagName/FreeTube-$versionNumber.arm64.rpm";
$downloadRpmx86 = "https://github.com/FreeTubeApp/FreeTube/releases/download/$fullTagName/FreeTube-$versionNumber.x86_64.rpm";
$downloadMacDmg = "https://github.com/FreeTubeApp/FreeTube/releases/download/$fullTagName/FreeTube-$versionNumber-mac.dmg";
$downloadWinZip = "https://github.com/FreeTubeApp/FreeTube/releases/download/$fullTagName/FreeTube-$versionNumber-win.zip";
$downloadWinExe = "https://github.com/FreeTubeApp/FreeTube/releases/download/$fullTagName/FreeTube.Setup.$versionNumber.exe";
$downloadLinuxTarx86 = "https://github.com/FreeTubeApp/FreeTube/releases/download/$fullTagName/FreeTube-$versionNumber-linux.tar.xz";
$downloadLinuxZipx86 = "https://github.com/FreeTubeApp/FreeTube/releases/download/$fullTagName/FreeTube-$versionNumber-linux.zip";
$downloadLinuxZipArm = "https://github.com/FreeTubeApp/FreeTube/releases/download/$fullTagName/FreeTube-$versionNumber-linux-arm64.zip";
$downloadLinuxTarArm = "https://github.com//FreeTubeApp/FreeTube/releases/download/$fullTagName/FreeTube-$versionNumber-linux-arm64.tar.xz";
?>

  <main class="mt-24">
    <header class="flex items-center flex-col">
      <img src="images/logoType.svg" class="h-40" alt="FreeTube Logo" />
      <h1 class="text-center text-4xl font-semibold">The Private YouTube Client</h1>
    </header>

    <section class="flex justify-center mt-24">
      <img src="images/FreeTube1.png" class="shadow-2xl" width="80%" alt="FreeTube's Latest Subscriptions using the grid view" />
    </section>

    <section class="w-full mt-24 bg-secondary">
      <div class="container mx-auto py-16 px-5">
        <h1 class="text-4xl">What is FreeTube?</h1>
        <p class="pt-5 leading-8 text-black tracking-wide">FreeTube is a YouTube client for Windows, Mac, and Linux built around using YouTube more privately.  You can enjoy your favorite content and creators without your habits being tracked.  All of your user data is stored locally and never sent or published to the internet.  Being powered by the Invidious API, FreeTube has become one of the best methods to watch YouTube privately on desktop.</p>
      </div>
    </section>

    <section class="flex justify-center mt-24">
      <img src="images/FreeTube2.png" class="shadow-2xl" width="80%" alt="Playing a video using FreeTube" />
    </section>

    <section class="w-full mt-24 bg-primary">
      <div class="container mx-auto py-16 px-5">
        <h1 class="text-3xl">Current Features</h1>
        <div class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
          <div class="mt-4 flex items-center">
            <div class="rounded-lg bg-gray-300 p-6 w-24 flex justify-center">
              <i class="fas fa-users text-4xl"></i>
            </div>
            <div class="ml-12">
              <h3 class="text-2xl text-blue-900">Subscriptions</h3>
              <p class="text-md text-gray-900">Subscribe to channels without an account</p>
            </div>
          </div>
          <div class="mt-4 flex items-center">
            <div class="rounded-lg bg-gray-300 p-6 w-24 flex justify-center">
              <i class="fas fa-database text-4xl"></i>
            </div>
            <div class="ml-12">
              <h3 class="text-2xl text-blue-900">Local Data</h3>
              <p class="text-md text-gray-900">All Subscirptions, History and Favorites are stored locally</p>
            </div>
          </div>
          <div class="mt-4 flex items-center">
            <div class="rounded-lg bg-gray-300 p-6 w-24 flex justify-center">
              <i class="fas fa-ban text-4xl"></i>
            </div>
            <div class="ml-12">
              <h3 class="text-2xl text-blue-900">No Ads</h3>
              <p class="text-md text-gray-900">Enjoy an ad free experience as you watch</p>
            </div>
          </div>
          <div class="mt-4 flex items-center">
            <div class="rounded-lg bg-gray-300 p-6 w-24 flex justify-center">
              <i class="fas fa-user-secret text-4xl"></i>
            </div>
            <div class="ml-12">
              <h3 class="text-2xl text-blue-900">Private</h3>
              <p class="text-md text-gray-900">Your viewing habits are not tracked by us or YouTube</p>
            </div>
          </div>
          <div class="mt-4 flex items-center">
            <div class="rounded-lg bg-gray-300 p-6 w-24 flex justify-center">
              <i class="fas fa-paint-brush text-4xl"></i>
            </div>
            <div class="ml-12">
              <h3 class="text-2xl text-blue-900">Familiar Design</h3>
              <p class="text-md text-gray-900">A design similar to YouTube makes it easy to transition to FreeTube</p>
            </div>
          </div>
          <div class="mt-4 flex items-center">
            <div class="rounded-lg bg-gray-300 p-6 w-24 flex justify-center">
              <i class="fab fa-osi text-4xl"></i>
            </div>
            <div class="ml-12">
              <h3 class="text-2xl text-blue-900">Open Source</h3>
              <p class="text-md text-gray-900">FreeTube is Free and Open Source Software under the GPLv3</p>
            </div>
          </div>
          <div class="mt-4 flex items-center">
            <div class="rounded-lg bg-gray-300 p-6 w-24 flex justify-center">
              <i class="fas fa-file-import text-4xl"></i>
            </div>
            <div class="ml-12">
              <h3 class="text-2xl text-blue-900">Import Subscriptions</h3>
              <p class="text-md text-gray-900">Import your subscriptions from YouTube to see your feed instantly</p>
            </div>
          </div>
          <div class="mt-4 flex items-center">
            <div class="rounded-lg bg-gray-300 p-6 w-24 flex justify-center">
              <i class="fas fa-desktop text-4xl"></i>
            </div>
            <div class="ml-12">
              <h3 class="text-2xl text-blue-900">Multi Platform</h3>
              <p class="text-md text-gray-900">Runs on Windows, Mac, and several Linux distributions</p>
            </div>
          </div>
        </div>
        <p class="mt-12 text-right text-blue-900 text-2xl">...and many more to come!</p>
      </div>
    </section>

    <section class="flex justify-center mt-24">
      <img src="images/FreeTube4.png" class="shadow-2xl" width="80%" alt="Latest Subscriptions user interface" />
    </section>

    <a name="download"></a>
    <section class="w-full mt-24 bg-secondary">
      <div class="container mx-auto py-16 px-5">
        <div class="content-title">
          <h1 class="text-3xl flex items-baseline">
            Download FreeTube
            <span class="ml-5 text-xl py-1 px-3 bg-red-900 rounded-full text-red-300"><?php echo $currentRelease ?> </span>
          </h1>
          <p class="mt-5 text-red-900">FreeTube is free to download thanks to its open source nature.</p>
        </div>

        <div class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
          <div class="flex items-center">
            <div class="rounded-lg p-6 w-24 flex justify-center">
              <i class="fab fa-windows text-6xl"></i>
            </div>
            <div class="ml-8">
              <h3 class="p-1 text-2xl">Windows x64</h3>
              <a href="<?php echo $downloadWinExe; ?>">
                <span class="download">.exe</span>
              </a>
              <a href="<?php echo $downloadWinZip; ?>">
                <span class="download">.zip</span>
              </a>
            </div>
          </div>

          <div class="flex items-center">
            <div class="rounded-lg p-6 w-24 flex justify-center">
              <i class="fab fa-apple text-6xl"></i>
            </div>
            <div class="ml-8">
              <h3 class="p-1 text-2xl">MacOS x64</h3>
              <a href="<?php echo $downloadMacDmg; ?>">
                <span class="download">.dmg</span>
              </a>
            </div>
          </div>

          <div class="flex items-center">
            <div class="rounded-lg p-6 w-24 flex justify-center">
              <i class="fab fa-ubuntu text-6xl"></i>
            </div>
            <div class="ml-8">
              <h3 class="p-1 text-2xl">Ubuntu / Debian x64</h3>
              <a href="<?php echo $downloadDebx86; ?>">
                <span class="download">.deb (x86)</span>
              </a>
              <a href="<?php echo $downloadDebArm; ?>">
                <span class="download">.deb (arm)</span>
              </a>
            </div>
          </div>

          <div class="flex items-center">
            <div class="rounded-lg p-6 w-24 flex justify-center">
              <i class="fab fa-fedora text-6xl"></i>
            </div>
            <div class="ml-8">
              <h3 class="p-1 text-2xl">Fedora / RedHat x64</h3>
              <a href="<?php echo $downloadRpmx86; ?>">
                <span class="download">.rpm (x86)</span>
              </a>
              <a href="<?php echo $downloadRpmArm; ?>">
                <span class="download">.rpm (arm)</span>
              </a>
            </div>
          </div>

          <div class="flex items-center">
            <div class="rounded-lg p-6 w-24 flex justify-center">
              <i class="fab fa-dropbox text-6xl"></i>
            </div>
            <div class="ml-8">
              <h3 class="p-1 text-2xl">Flatpak / AppImage</h3>
              <a href="https://flathub.org/apps/details/io.freetubeapp.FreeTube">
                <span class="download">Flathub</span>
              </a>
              <a href="<?php echo $downloadAppImage; ?>">
                <span class="download">AppImage</span>
              </a>
            </div>
          </div>

          <div class="flex items-center">
            <div class="rounded-lg p-6 w-24 flex justify-center">
              <i class="fab fa-linux text-6xl"></i>
            </div>
            <div class="ml-8">
              <h3 class="p-1 text-2xl">Other Linux Distributions</h3>
              <a href="https://aur.archlinux.org/packages/freetube-bin/">
                <span class="download">Arch User Repository</span>
              </a>
              <a href="<?php echo $downloadLinuxZipx86; ?>">
                <span class="download">.zip (x86)</span>
              </a>
              <a href="<?php echo $downloadLinuxZipArm; ?>">
                <span class="download">.zip (arm)</span>
              </a>
              <a href="<?php echo $downloadLinuxTarx86; ?>">
                <span class="download">.tar (x86)</span>
              </a>
              <a href="<?php echo $downloadLinuxTarArm; ?>">
                <span class="download">.tar (arm)</span>
              </a>
            </div>
          </div>
        </div>
        <p class="text-center mt-10 text-red-900">Users are also welcome to download from <a href="http://source.freetubeapp.io" class="text-gray-900">source</a> for all platforms</p>
      </div>
    </section>

    <a name="contact"></a>
    <section class="bg-gray-200 mt-24">
      <div class="container mx-auto px-5">
        <h1 class="text-3xl">Contact Information</h1>
        <p>Have an issue or suggestion?</p>
        <p>Please make a thread on our <a class="text-primary" href="https://github.com/FreeTubeApp/FreeTube/issues">GitHub</a> page so we can track it.</p>
        <p>You can also ask using one of these methods:</p>
        <div class="p-10 text-primary">
          <a href="mailto:freetubeapp@protonmail.com">
            <i class="fas fa-envelope text-xl"></i>
            <span class="ml-5">FreeTubeApp@protonmail.com</span>
          </a>
          <span class="my-3 block"></span>
          <a href="https://riot.im/app/#/group/+freetube:matrix.org">
            <i class="fas fa-comments text-xl"></i>
            <span class="ml-5">FreeTube on Matrix</span>>
          </a>
        </div>
        <p>If you like FreeTube, consider supporting the project by donating on <a class="text-primary" href="https://liberapay.com/FreeTube">Liberapay</a> or by donating to our Bitcoin address:</p>

        <div  class="text-primary p-10">
          <a href="bitcoin:1Lih7Ho5gnxb1CwPD4o59ss78pwo2T91eS">
            <i class="fab fa-bitcoin text-xl"></i>
            <span>BTC: 1Lih7Ho5gnxb1CwPD4o59ss78pwo2T91eS</span>
          </a>
        </div>
      </div>
    </section>
  </main><!-- /main -->
<?php require 'includes/footer.php';?>
