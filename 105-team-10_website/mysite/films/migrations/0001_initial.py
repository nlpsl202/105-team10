# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Film',
            fields=[
                ('id', models.AutoField(auto_created=True, verbose_name='ID', primary_key=True, serialize=False)),
                ('name', models.CharField(max_length=20)),
                ('url', models.CharField(max_length=50)),
                ('picture', models.CharField(default='default.jpg', max_length=20)),
            ],
            options={
            },
            bases=(models.Model,),
        ),
    ]
