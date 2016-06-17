from django.db import models

# Create your models here.
class Film(models.Model):
	name = models.CharField(max_length=20)
	url = models.CharField(max_length=50)
	picture = models.CharField(max_length=50,default='default.jpg')
	

	def __str__(self):
    		return self.name