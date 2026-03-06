const express = require("express");
const router = express.Router();

router.post("/register", (req, res) => {
  return res.json({ message: "Register route works" });
});

router.post("/login", (req, res) => {
  return res.json({ message: "Login route works" });
});

module.exports = router;