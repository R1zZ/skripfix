<?php include 'header.php' ?>
<form action="action-infoloker.php" method="POST" name="form-input-data">
    <table cellpadding="0" border="0">
      <tr>
          <td align="center">Minat pengalaman</td>
          <td align="center"><select name="Pengalaman">
            <option value="-">--Pilih Pengalaman--</option>
            <option value="website">Website</option>
            <option value="mobile">Mobile</option>
            <option value="jaringan">Network</option>
            <option value="AI">Artificial Intelegent</option>
            <option value="analisi">Analysist</option>
            <option value="SofwareEngineering">Software Engineering</option>
         </select></td>
          </tr>
        <td colspan="2" align="center"><input type="submit" name="Submit" value="Submit">
        </tr>
    </table>  
  </form>
  <?php include 'footer.php' ?>