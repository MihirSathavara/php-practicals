import turtle

def draw_rectangle(color, width, height):
    turtle.begin_fill()
    turtle.fillcolor(color)
    for _ in range(2):
        turtle.forward(width)
        turtle.right(90)
        turtle.forward(height)
        turtle.right(90)
    turtle.end_fill()

def draw_flag():
    turtle.speed(2)
    turtle.penup()
    
    # Setting the starting position
    x = -200
    y = 100
    turtle.goto(x, y)
    
    # Drawing the green stripe
    draw_rectangle("#1EB53A", 600, 200)
    
    # Moving to the next stripe
    turtle.goto(x, y - 200)
    
    # Drawing the blue stripe
    draw_rectangle("#3C3C6D", 600, 100)
    
    # Moving to the next stripe
    turtle.goto(x, y - 300)
    
    # Drawing the red stripe
    draw_rectangle("#EA2839", 600, 200)

    turtle.hideturtle()
    turtle.done()

# Calling the function to draw the flag
draw_flag()