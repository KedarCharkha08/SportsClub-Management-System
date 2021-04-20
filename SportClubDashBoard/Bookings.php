<?php include('Homepageconstants.php') ?>

<form class="relative px-5 mt-4 bg-gray-100 bg-opacity-0">
    <svg width="20" height="20" fill="currentColor" class="absolute left-8 top-5 transform -translate-y-1/2 text-black px">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
    </svg>
    <input class="focus:border-light-blue-500 focus:ring-1 focus:ring-light-blue-500 focus:outline-none w-full text-sm text-black placeholder-black border border-black rounded-md py-2 pl-10 mb-6 bg-gray-500 bg-opacity-0" type="text" aria-label="Search" placeholder="SEARCH" name="search_bookings" id="search_bookings" />
</form>
<div class="flex flex-col px-5">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-100 bg-opacity-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-m-12 font-medium text-blue-800 uppercase tracking-wider">
                                Player Name
                            </th>

                            <th scope="col" class="px-6 py-3 text-left text-m-12 font-medium text-blue-800 uppercase tracking-wider">
                                Sport
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-m-12 font-medium text-blue-800 uppercase tracking-wider">
                                Date
                            </th>

                            <th scope="col" class="px-6 py-3 text-left text-m-12 font-medium text-blue-800 uppercase tracking-wider">
                                Time
                            </th>
                            <th scope="col" class="px-6 py-3 text-center text-m-12 font-medium text-blue-800 uppercase tracking-wider">
                                Delete Booking
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-100 bg-opacity-90 divide-y divide-gray-200">
                        <?php
                        echo  $_SESSION['t3'];
                        $login_cred2 = $_SESSION['t3'];
                        if (empty($_GET)) {
                            $sql = "SELECT * FROM `casual_play`, `player` WHERE casual_play.reg_id = player.reg_id AND casual_play.club_id = 10001 ORDER BY casual_play.date ,casual_play.start_time";
                        } else {
                            $sql = "SELECT * FROM `casual_play`  INNER JOIN `player` ON casual_play.reg_id = player.reg_id WHERE first_name LIKE '%" . $_GET['search_bookings'] . "%' ORDER BY casual_play.date ,casual_play.start_time ";
                        }

                        $sql = "SELECT * FROM `casual_play`, `player` WHERE casual_play.reg_id = player.reg_id AND casual_play.club_id = 10001 ORDER BY casual_play.date ,casual_play.start_time";
                        $result = mysqli_query($conn, $sql);
                        if ($result == TRUE) {
                            $num = mysqli_num_rows($result);

                            if ($num > 0) {
                                // LOOP TILL END OF DATA 
                                while ($rows = mysqli_fetch_assoc($result)) {
                        ?>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap event_name">
                                            <div class="text-m-12 text-black"><?php echo $rows['first_name']; ?></div>
                                        </td>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-m-12 text-black"><?php echo $rows['sport']; ?></div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-m-12 text-black"><?php echo $rows['date']; ?></div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-m-12 text-black"><?php echo $rows['start_time']; ?></div>
                                        </td>


                                        <td class="px-3 py-4 whitespace-nowrap text-center text-sm font-medium">
                                            <a href="http://localhost/sportsclub/sportclubdashboard/DeletePlayer.php?id=<?php echo $rows['reg_id']; ?>" class="text-black hover:text-gray-800 text-center">DELETE</a>
                                        </td>
                                    </tr>
                        <?php
                                }
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include('DropdownJS_Script.php') ?>