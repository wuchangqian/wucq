#!/usr/bin/env python3
import pygame,sys,time,random
from pygame.locals import *

# 草莓颜色
strawBerreyColor = pygame.Color(0,0,0)
# 全局画布背景色
bgColor = pygame.Color(230,230,230)
# 贪吃蛇身体颜色
snakeColor = pygame.Color(255,0,255)
# 游戏结束提示文字颜色
gameOverFontColor = pygame.Color(255,0,0)
panelWidth = 1240
panelHeight = 680


# 贪吃蛇移动速度 数字越大前进越快
gameSpeed = 3

# 定义gameOver函数
def gameOver(playSurface):
    gameOverFont = pygame.font.Font('arial.ttf',20)
    gameOverSurf = gameOverFont.render('Oh no ! failure!', True, gameOverFontColor)
    gameOverRect = gameOverSurf.get_rect()
    gameOverRect.midtop = (320, 10)
    playSurface.blit(gameOverSurf, gameOverRect)
    pygame.display.flip()
    time.sleep(5)
    pygame.quit()
    sys.exit()

# 定义main函数
def main():
    global gameSpeed
    # 初始化pygame
    pygame.init()
    fpsClock = pygame.time.Clock()
    # 创建pygame显示层
    playSurface = pygame.display.set_mode((panelWidth,panelHeight))
    pygame.display.set_caption('贪吃蛇。')
    bg_img = pygame.image.load("bg.jpg").convert() # 背景图片


    # 初始化变量
    snakePosition = [160,100]
    snakeSegments = [[160,100],[140,100],[120,100],[100,100],[80,100],[60,100],[40,100],[20,100],[0,100]]
    raspberryPosition = [300,300]
    raspberrySpawned = 1
    direction = 'right'
    changeDirection = direction
    while True:
        # 检测例如按键等pygame事件
        for event in pygame.event.get():
            if event.type == QUIT:
                pygame.quit()
                sys.exit()
            elif event.type == KEYDOWN:
                # 判断键盘事件
                if event.key == K_1 :
                    gameSpeed += 1
                if event.key == K_2 :
                    gameSpeed -= 1
                if event.key == K_RIGHT or event.key == ord('d'):
                    changeDirection = 'right'
                if event.key == K_LEFT or event.key == ord('a'):
                    changeDirection = 'left'
                if event.key == K_UP or event.key == ord('w'):
                    changeDirection = 'up'
                if event.key == K_DOWN or event.key == ord('s'):
                    changeDirection = 'down'
                if event.key == K_ESCAPE:
                    pygame.event.post(pygame.event.Event(QUIT))
        # 判断是否输入了反方向
        if changeDirection == 'right' and not direction == 'left':
            direction = changeDirection
        if changeDirection == 'left' and not direction == 'right':
            direction = changeDirection
        if changeDirection == 'up' and not direction == 'down':
            direction = changeDirection
        if changeDirection == 'down' and not direction == 'up':
            direction = changeDirection
        # 根据方向移动蛇头的坐标
        if direction == 'right':
            snakePosition[0] += 20
        if direction == 'left':
            snakePosition[0] -= 20
        if direction == 'up':
            snakePosition[1] -= 20
        if direction == 'down':
            snakePosition[1] += 20
        # 增加蛇的长度
        snakeSegments.insert(0,list(snakePosition))
        # 判断是否吃掉了树莓
        if snakePosition[0] == raspberryPosition[0] and snakePosition[1] == raspberryPosition[1]:
            raspberrySpawned = 0
        else:
            snakeSegments.pop()
        # 如果吃掉树莓，则重新生成树莓
        if raspberrySpawned == 0:
            x = random.randrange(1,32)
            y = random.randrange(1,24)
            raspberryPosition = [int(x*20),int(y*20)]
            raspberrySpawned = 1
        # 绘制pygame显示层
        playSurface.fill(bgColor)

        playSurface.blit(bg_img, (0, 0)) # 绘制背景


        for position in snakeSegments:
            pygame.draw.rect(playSurface,snakeColor,Rect(position[0],position[1],20,20))
            pygame.draw.rect(playSurface,strawBerreyColor,Rect(raspberryPosition[0], raspberryPosition[1],20,20))

        # 刷新pygame显示层
        pygame.display.flip()

        # 判断是否死亡
        if snakePosition[0] > panelWidth or snakePosition[0] < 0:
            gameOver(playSurface)
        if snakePosition[1] > panelHeight or snakePosition[1] < 0:
            for snakeBody in snakeSegments[1:]:
                if snakePosition[0] == snakeBody[0] and snakePosition[1] == snakeBody[1]:
                    gameOver(playSurface)
        # 控制游戏速度
        fpsClock.tick(gameSpeed)

if __name__ == "__main__":
    main()

