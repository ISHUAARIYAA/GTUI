<?php
include "conn.php";
?>
<div class="p-7 m-7 rounded-lg bg-white">
  <div class="mb-5"><p class="text-lg font-medium text-xs leading-tight uppercase mb-7">MEGAHOLDINGS PEKERJA</p></div>
    <a class="p-3 font-medium text-xs leading-tight uppercase bg-blue-500 text-white rounded-lg" href="tambahpekerja.php">TAMBAH</a>
</div>
<center><p class="text-white">PEKERJA LIST</p></center>
<div>
  <div class="table">
        <table border=2>
          <thead>
            <tr>
              <th>
                ID
              </th>
              <th>
              NAMA PEKERJA
              </th>
              <th>
                NO KP
              </th>
              <th>
                NO HP
              </th>
              <th >
                JANTINA
              </th>
            </tr>
          </thead>
          <tbody>
            <?php
            $data = mysqli_query($con, "SELECT * FROM info_pekerja");
            while ($info = mysqli_fetch_array($data)) { ?>
                  <tr>
              <td>
                <?php echo $info["id"]; ?>
              </td>
              <td>
                <?php echo $info["nama_pekerja"]; ?>
              </td>
              <td>
              <?php echo $info["no_kp"]; ?>
              </td>
              <td>
              <?php echo $info["no_hp"]; ?>
              </td>
              <td>
                <?php echo $info["jantina"]; ?>
              </td>
              <td class="text-base text-white font-medium px-6 py-4 whitespace-nowrap">
              <div class="flex space-x-2 justify-center">
                <button type="button"><a href="kemaskinipekerja.php?update_id=<?php echo $info["id"]; ?>">Update</a></button>
                <button type="button"><a href="kemaskinipekerja.php?update_id=<?php echo $info["id"]; ?>">Delete</a></button>
            </div>
            
        </div>
    </div>
</div>
              </div>
            </td>
              </tr>
<?php } ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>