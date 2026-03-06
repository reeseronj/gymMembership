const db = require("../config/db");
const bcrypt = require("bcryptjs");
const jwt = require("jsonwebtoken");

const register = (req, res) => {
  const { name, email, password } = req.body;

  const hashedPassword = bcrypt.hashSync(password, 10);

  const sql = "INSERT INTO tbl_admin (name, email, password) VALUES (?, ?, ?)";

  db.query(sql, [name, email, hashedPassword], (err) => {
    if (err) {
      return res.status(500).json({ error: err.message });
    }

    return res.status(201).json({ message: "Admin registered successfully" });
  });
};

const login = (req, res) => {
  const { email, password } = req.body;

  const sql = "SELECT * FROM tbl_admin WHERE email = ?";

  db.query(sql, [email], (err, result) => {
    if (err) {
      return res.status(500).json({ error: err.message });
    }

    if (!result || result.length === 0) {
      return res.status(401).json({ message: "User not found" });
    }

    const user = result[0];
    const isMatch = bcrypt.compareSync(password, user.password);

    if (!isMatch) {
      return res.status(401).json({ message: "Invalid password" });
    }

    const token = jwt.sign(
      { id: user.id, email: user.email },
      process.env.JWT_SECRET || "fallbacksecret",
      { expiresIn: "1d" }
    );

    return res.json({
      message: "Login successful",
      token,
    });
  });
};

module.exports = { register, login };