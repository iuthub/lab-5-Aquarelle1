<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<h1>Buy Your Way to a Better Education!</h1>

		<p>
			The rough economy, along with recent changes in University of Washington policy, now allow us to offer grades for money.  That's right!  All you need to get a 4.0 in this course is cold, hard, cash.
		</p>
		
		<hr />
		
		<h2>Give Us Your Money</h2>
    <form action="/lab5/sucker.php" method="post">
        <dl>
            <dt>Name</dt>
            <dd>
                <input type="text" name="name"/>
            </dd>

            <dt>Section</dt>
            <dd>
                <select name="section">
                    <option disabled selected>(select a section)</option>
                    <option value="socie">SOCIE</option>
                    <option value="sol">SOL</option>x
                </select>
            </dd>

            <dt>Credit Card</dt>
            <dd>
                <input type="number" name="card"/>
            </dd>

            <input type="radio" name="card_type" id="card_type_visa" value="visa" checked/>
            <label for="card_type_visa">Visa</label>

            <input type="radio" name="card_type" id="card_type_mcard" value="master_card"/>
            <label for="card_type_mcard">Master Card</label>
        </dl>

        <div>
            <button>I am a giant sucker.</button>
        </div>
    </form>

	</body>
</html>