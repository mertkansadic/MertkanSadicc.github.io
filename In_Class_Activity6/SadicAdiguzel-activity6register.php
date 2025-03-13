<form method="POST" action="SadicAdiguzel-activity6preview.php">
    <p>Name: <input type="text" name="name"></p>
    <p>Username: <input type="text" name="username"></p>
    <p>Password: <input type="password" name="password"></p>
    <p>Address: <input type="text" name="address"></p>
    <p>Country: 
        <select name="country">
            <option value="USA">USA</option>
            <option value="Canada">Canada</option>
            <option value="France">France</option>
            <option value="Japan">Japan</option>
            <option value="China">China</option>
        </select>
    </p>
    <p>ZIP Code: <input type="text" name="zip"></p>
    <p>Email: <input type="email" name="email"></p>
    <p>Sex: <input type="text" name="sex"></p>
    <p>Language: 
        <input type="checkbox" name="language[]" value="English"> English
        <input type="checkbox" name="language[]" value="Spanish"> Spanish
        <input type="checkbox" name="language[]" value="French"> French
    </p>
    <p>About: <textarea name="about"></textarea></p>
    <input type="submit" value="Submit">
</form>
