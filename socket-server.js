const app = require("express")();
const http = require("http").createServer(app);
const io = require("socket.io")(http);

// Handle connections
io.on("connection", (socket) => {
    console.log("A user connected.");

    // Handle events
    socket.on("event-name", (data) => {
        // Handle the event and broadcast it to other clients
        socket.broadcast.emit("event-name", data);
    });

    // Handle disconnections
    socket.on("disconnect", () => {
        console.log("A user disconnected.");
    });
});

// Start the Socket.IO server
http.listen(3000, () => {
    console.log("Socket.IO server listening on port 3000.");
});
