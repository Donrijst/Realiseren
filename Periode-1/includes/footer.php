    </div>
</div>
    <div class="footer">
        <h3>Einde van Jesse</h3>
        <p>
            <?php
                if(isset($_COOKIE["userCountryCode"]) == true) {
                    $countryCode = $_COOKIE["userCountryCode"];
                    echo "<img src='../images/flags/$countryCode.png'>";
                } else {
                    echo "<a href='../hoofdstuk6/oefening6.1.php'>Geef een land op</a>";
                }
            ?>
            |

            <?php
                if(isset($_COOKIE))
            ?>
        </p>
    </div>
</body>
</html>

<style>
    .footer {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: cadetblue;
    width: 100%;
    height: 150px;
}
</style>