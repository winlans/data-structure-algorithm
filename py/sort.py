
# 冒泡排序


def bubble(arr):
    length = len(arr)

    for i in range(length):
        for j in range(i, length):
            if arr[i] > arr[j]:
                arr[i], arr[j] = arr[j], arr[i]

    return arr


print(bubble([1, 23, 2, 43, 4, 454, 3]))


def quick(arr):
    length = len(arr)

    if length <= 1:
        return arr

    mid_val = arr.pop()
    right = []  # right = left = [] 这样写是不对的， 因为他们共同引用了一个list， 这是与php不同之处
    left = []

    for val in arr:
        if val > mid_val:
            left.append(val)
        else:
            right.append(val)

    return quick(right) + [mid_val] + quick(left)


print(quick([12, 24, 5, 234, 2, 5, 23, 42, 4]))
